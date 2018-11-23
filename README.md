# fuel-dompdf
fuel-dompdf is a simple package for FuelPHP 1.8 that utilizes the latest stable version of [dompdf](https://github.com/dompdf/dompdf), released in November of 2017. 

You may or may not use it to create pdf-files directly from your controller, using views to regulate the output.

## Installation & Usage

1. Download and unzip fuel-dompdf to your packages folder.
2. Open your `config.php`, which can be found in the `fuel/app/config` or `fuel/app/modules/MYMODULE/config` folder.
3. Add `dompdf` to ensure it'll be loaded on Fuel's startup.
4. Save and exit.
5. Add `use Dompdf\Dompdf`to your controller.

### Example ###

```php
namespace MyModule;
use Dompdf\Dompdf as Pdf;
use Dompdf\Options as PdfOptions;

class Controller_Order extends MyModule\Controller_Frontend
{
	private $file_ext = '.pdf';
	private $download_folder = 'files'; // path relative to Fuel's public folder

	public function action_invoice()
	{
		$doc_type = 'invoice';
		$filename = $doc_type.$this->file_ext;
		$filepath = $this->download_folder.DS.$this->id;

		if ( ! @file_exists($filepath))
		{
			mkdir($filepath, 0755);
		}

		if ( ! @file_exists($filepath.DS.$filename))
		{
			$options = new PdfOptions();
			$options->set('isRemoteEnabled', true);
			$dompdf = new Pdf($options);

			$context = stream_context_create(array(
				'ssl' => array(
					'verify_peer'       => false,
					'verify_peer_name'  => false,
					'allow_self_signed' => false,
				);
			));	

			$dompdf->setHttpContext($context);
			$data = array(
				// fill with data, e.g. customer and order
			);
			$html = Fuel\Core\View::forge('download/order/invoice', $data);
			$dompdf->loadHtml($html);
			$dompdf->setPaper('A4', 'portrait');
			$dompdf->render();
			$output = $dompdf->output();

			file_put_contents($filename, $output);
		}
		return Fuel\Core\File::download($filename, 'Order-'.$this->id.$this->file_ext);
	}
}
```

## Documentation
* [dompdf](https://github.com/dompdf/dompdf) ([download](https://github.com/dompdf/dompdf/releases/tag/v0.8.2))
* [FuelPHP](https://fuelphp.com/docs/) ([download](https://www.fuelphp.com/downloads))

