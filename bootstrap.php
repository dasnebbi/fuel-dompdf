<?php
/**
 * Fuel is a fast, lightweight, community driven PHP 5.4+ framework.
 *
 * @package    Fuel
 * @version    1.8.1
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2018 Fuel Development Team
 * @link       http://fuelphp.com
 */

\Autoloader::add_classes(array(
	'Cpdf'	=> __DIR__.'/lib/Cpdf.php',
));

//	HTML5 Parser
\Autoloader::add_core_namespace('Html5Lib');
\Autoloader::add_classes(array(
	'Html5Lib\\HTML5_Parser'	=> __DIR__.'/lib/html5lib/Parser.php',
	'Html5Lib\\HTML5_Data'	=> __DIR__.'/lib/html5lib/Data.php',
	'Html5Lib\\HTML5_InputStream'	=> __DIR__.'/lib/html5lib/InputStream.php',
	'Html5Lib\\HTML5_TreeBuilder'	=> __DIR__.'/lib/html5lib/TreeBuilder.php',
	'Html5Lib\\HTML5_Tokenizer'	=> __DIR__.'/lib/html5lib/Tokenizer.php',
));

//	Sabberworm CSS
\Autoloader::add_core_namespace('Sabberworm');
\Autoloader::add_classes(array(
	'Sabberworm\\CSS\\OutputFormat'	=> __DIR__.'/lib/Sabberworm/CSS/OutputFormat',
	'Sabberworm\\CSS\\Parser'	=> __DIR__.'/lib/Sabberworm/CSS/Parser',
	'Sabberworm\\CSS\\Renderable'	=> __DIR__.'/lib/Sabberworm/CSS/Renderable',
	'Sabberworm\\CSS\\Settings'	=> __DIR__.'/lib/Sabberworm/CSS/Settings',
	
	'Sabberworm\\CSS\\Comment\\Comment'	=> __DIR__.'/lib/Sabberworm/CSS/Comment/Comment.php',
	'Sabberworm\\CSS\\Comment\\Commentable'	=> __DIR__.'/lib/Sabberworm/CSS/Comment/Commentable.php',
	
	'Sabberworm\\CSS\\CSSList\\AtRuleBlockList'	=> __DIR__.'/lib/Sabberworm/CSS/CSSList/AtRuleBlockList.php',
	'Sabberworm\\CSS\\CSSList\\CSSBlockList'	=> __DIR__.'/lib/Sabberworm/CSS/CSSList/CSSBlockList.php',
	'Sabberworm\\CSS\\CSSList\\CSSList'	=> __DIR__.'/lib/Sabberworm/CSS/CSSList/CSSList.php',
	'Sabberworm\\CSS\\CSSList\\Document'	=> __DIR__.'/lib/Sabberworm/CSS/CSSList/Document.php',
	'Sabberworm\\CSS\\CSSList\\KeyFrame'	=> __DIR__.'/lib/Sabberworm/CSS/CSSList/KeyFrame.php',
	
	'Sabberworm\\CSS\\Parsing\\OutputException'	=> __DIR__.'/lib/Sabberworm/CSS/Parsing/OutputException.php',
	'Sabberworm\\CSS\\Parsing\\SourceException'	=> __DIR__.'/lib/Sabberworm/CSS/Parsing/SourceException.php',
	'Sabberworm\\CSS\\Parsing\\UnexpectedTokenException'	=> __DIR__.'/lib/Sabberworm/CSS/Parsing/UnexpectedTokenException',
	
	'Sabberworm\\CSS\\Property\\AtRule'	=> __DIR__.'/lib/Sabberworm/CSS/Property/AtRule.php',
	'Sabberworm\\CSS\\Property\\Charset'	=> __DIR__.'/lib/Sabberworm/CSS/Property/Charset.php',
	'Sabberworm\\CSS\\Property\\CSSNamespace'	=> __DIR__.'/lib/Sabberworm/CSS/Property/CSSNamespace.php',
	'Sabberworm\\CSS\\Property\\Import'	=> __DIR__.'/lib/Sabberworm/CSS/Property/Import.php',
	'Sabberworm\\CSS\\Property\\Selector'	=> __DIR__.'/lib/Sabberworm/CSS/Property/Selector.php',
	
	'Sabberworm\\CSS\\Rule\\Rule'	=> __DIR__.'/lib/Sabberworm/CSS/Rule/Rule.php',
	
	'Sabberworm\\CSS\\RuleSet\\AtRuleSet'	=> __DIR__.'/lib/Sabberworm/CSS/RuleSet/AtRuleSet.php',
	'Sabberworm\\CSS\\RuleSet\\DeclarationBlock'	=> __DIR__.'/lib/Sabberworm/CSS/RuleSet/DeclarationBlock.php',
	'Sabberworm\\CSS\\RuleSet\\RuleSet'	=> __DIR__.'/lib/Sabberworm/CSS/RuleSet/RuleSet.php',
	
	'Sabberworm\\CSS\\Value\\Color'	=> __DIR__.'/lib/Sabberworm/CSS/Value/Color.php',
	'Sabberworm\\CSS\\Value\\CSSFunction'	=> __DIR__.'/lib/Sabberworm/CSS/Value/CSSFunction.php',
	'Sabberworm\\CSS\\Value\\CSSString'	=> __DIR__.'/lib/Sabberworm/CSS/Value/CSSString',
	'Sabberworm\\CSS\\Value\\PrimitiveValue'	=> __DIR__.'/lib/Sabberworm/CSS/Value/PrimitiveValue',
	'Sabberworm\\CSS\\Value\\RuleValueList'	=> __DIR__.'/lib/Sabberworm/CSS/Value/RuleValueList',
	'Sabberworm\\CSS\\Value\\Size'	=> __DIR__.'/lib/Sabberworm/CSS/Value/Size',
	'Sabberworm\\CSS\\Value\\URL'	=> __DIR__.'/lib/Sabberworm/CSS/Value/URL',
	'Sabberworm\\CSS\\Value\\Value'	=> __DIR__.'/lib/Sabberworm/CSS/Value/Value',
	'Sabberworm\\CSS\\Value\\ValueList'	=> __DIR__.'/lib/Sabberworm/CSS/Value/ValueList',
));

//	php-font-lib
\Autoloader::add_core_namespace('FontLib');
\Autoloader::add_classes(array(
	'FontLib\\AdobeFontMetrics'	=> __DIR__.'/lib/FontLib/AdobeFontMetrics.php',
	'FontLib\\BinaryStream'	=> __DIR__.'/lib/FontLib/BinaryStream.php',
	'FontLib\\EncodingMap'	=> __DIR__.'/lib/FontLib/EncodingMap.php',
	'FontLib\\Font'	=> __DIR__.'/lib/FontLib/Font.php',
	'FontLib\\Header'	=> __DIR__.'/lib/FontLib/Header.php',

	'FontLib\\EOT\\File'	=> __DIR__.'/lib/FontLib/EOT/File.php',
	'FontLib\\EOT\\Header'	=> __DIR__.'/lib/FontLib/EOT/Header.php',

	'FontLib\\Exception\\FontNotFoundException'	=> __DIR__.'/lib/FontLib/Exception/FontNotFoundException.php',

	'FontLib\\Glyph\\Outline'	=> __DIR__.'/lib/FontLib/Glyph/Outline.php',
	'FontLib\\Glyph\\OutlineComponent'	=> __DIR__.'/lib/FontLib/Glyph/OutlineComponent.php',
	'FontLib\\Glyph\\OutlineComposite'	=> __DIR__.'/lib/FontLib/OutlineComposite.php',
	'FontLib\\Glyphe\\OutlineSimple'	=> __DIR__.'/lib/FontLib/OutlineSimple.php',

	'FontLib\\OpenType\\File'	=> __DIR__.'/lib/FontLib/OpenType/File.php',
	'FontLib\\OpenType\\TableDirectoryEntry'	=> __DIR__.'/lib/FontLib/OpenType/TableDirectoryEntry.php',

	'FontLib\\Table\\DirectoryEntry'	=> __DIR__.'/lib/FontLib/Table/DirectoryEntry.php',
	'FontLib\\Table\\Table'	=> __DIR__.'/lib/FontLib/Table/Table.php',

	'FontLib\\Table\\Type\\cmao'	=> __DIR__.'/lib/FontLib/Table/Type/cmao.php',
	'FontLib\\Table\\Type\\glyf'	=> __DIR__.'/lib/FontLib/Table/Type/glyf.php',
	'FontLib\\Table\\Type\\head'	=> __DIR__.'/lib/FontLib/Table/Type/head.php',
	'FontLib\\Table\\Type\\hhea'	=> __DIR__.'/lib/FontLib/Table/Type/hhea.php',
	'FontLib\\Table\\Type\\hmtx'	=> __DIR__.'/lib/FontLib/Table/Type/hmtx.php',
	'FontLib\\Table\\Type\\kern'	=> __DIR__.'/lib/FontLib/Table/Type/kern.php',
	'FontLib\\Table\\Type\\loca'	=> __DIR__.'/lib/FontLib/Table/Type/loca.php',
	'FontLib\\Table\\Type\\maxp'	=> __DIR__.'/lib/FontLib/Table/Type/maxp.php',
	'FontLib\\Table\\Type\\name'	=> __DIR__.'/lib/FontLib/Table/Type/name.php',
	'FontLib\\Table\\Type\\nameRecord'	=> __DIR__.'/lib/FontLib/Table/Type/nameRecord.php',
	'FontLib\\Table\\Type\\os2'	=> __DIR__.'/lib/FontLib/Table/Type/os2.php',
	'FontLib\\Table\\Type\\post'	=> __DIR__.'/lib/FontLib/Table/Type/post.php',

	'FontLib\\TrueType\\Collection'	=> __DIR__.'/lib/FontLib/TrueType/Collection.php',
	'FontLib\\TrueType\\File'	=> __DIR__.'/lib/FontLib/TrueType/File.php',
	'FontLib\\TrueType\\Header'	=> __DIR__.'/lib/FontLib/TrueType/Header.php',
	'FontLib\\TrueType\\TableDirectoryEntry'	=> __DIR__.'/lib/FontLib/TrueType/TableDirectoryEntry.php',

	'FontLib\\WOFF\\File'	=> __DIR__.'/lib/FontLib/WOFF/File.php',
	'FontLib\\WOFF\\Header'	=> __DIR__.'/lib/FontLib/WOFF/Header.php',
	'FontLib\\WOFF\\TableDirectoryEntry'	=> __DIR__.'/lib/FontLib/WOFF/TableDirectoryEntry.php',
));

//	php-svg-lib
\Autoloader::add_core_namespace('Svg');
\Autoloader::add_classes(array(
	'Svg\\DefaultStyle'	=> __DIR__.'/lib/Svg/DefaultStyle.php',
	'Svg\\Document'	=> __DIR__.'/lib/Svg/Document.php',
	'Svg\\Style'	=> __DIR__.'/lib/Svg/Style.php',

	'Svg\\Gradient\\Stop'	=> __DIR__.'/lib/Svg/Gradient/Stop.php',

	'Svg\\Surface\\CPdf'	=> __DIR__.'/lib/Svg/Surface/CPdf.php',
	'Svg\\Surface\\SurfaceCpdf'	=> __DIR__.'/lib/Svg/Surface/SurfaceCpdf.php',
	'Svg\\Surface\\SurfaceGmagick'	=> __DIR__.'/lib/Svg/Surface/SurfaceGmagick.php',
	'Svg\\Surface\\SurfaceInterface'	=> __DIR__.'/lib/Svg/Surface/SurfaceInterface.php',
	'Svg\\Surface\\SurfacePDFLib'	=> __DIR__.'/lib/Svg/Surface/SurfacePDFLib.php',

	'Svg\\Tag\\AbstractTag'	=> __DIR__.'/lib/Svg/Tag/AbstractTag.php',
	'Svg\\Tag\\Anchor'	=> __DIR__.'/lib/Svg/Tag/Anchor.php',
	'Svg\\Tag\\Circle'	=> __DIR__.'/lib/Svg/Tag/Circle.php',
	'Svg\\Tag\\ClipPath'	=> __DIR__.'/lib/Svg/Tag/ClipPath.php',
	'Svg\\Tag\\Ellipse'	=> __DIR__.'/lib/Svg/Tag/Ellipse.php',
	'Svg\\Tag\\Group'	=> __DIR__.'/lib/Svg/Tag/Group.php',
	'Svg\\Tag\\Image'	=> __DIR__.'/lib/Svg/Tag/Image.php',
	'Svg\\Tag\\Line'	=> __DIR__.'/lib/Svg/Tag/Line.php',
	'Svg\\Tag\\LinearGradient'	=> __DIR__.'/lib/Svg/Tag/LinearGradient.php',
	'Svg\\Tag\\Path'	=> __DIR__.'/lib/Svg/Tag/Path.php',
	'Svg\\Tag\\Polygon'	=> __DIR__.'/lib/Svg/Tag/Polygon.php',
	'Svg\\Tag\\Polyline'	=> __DIR__.'/lib/Svg/Tag/Polyline.php',
	'Svg\\Tag\\RadialGradient'	=> __DIR__.'/lib/Svg/Tag/RadialGradient.php',
	'Svg\\Tag\\Rect'	=> __DIR__.'/lib/Svg/Tag/Rect.php',
	'Svg\\Tag\\Shape'	=> __DIR__.'/lib/Svg/Tag/Shape.php',
	'Svg\\Tag\\Stop'	=> __DIR__.'/lib/Svg/Tag/Stop.php',
	'Svg\\Tag\\StyleTag'	=> __DIR__.'/lib/Svg/Tag/StyleTag.php',
	'Svg\\Tag\\Text'	=> __DIR__.'/lib/Svg/Tag/Text.php',
	'Svg\\Tag\\UseTag'	=> __DIR__.'/lib/Svg/Tag/UseTag.php',
));

//	dompdf
\Autoloader::add_core_namespace('Dompdf');
\Autoloader::add_classes(array(
	'Dompdf\\Canvas'	=> __DIR__.'/src/Canvas.php',
	'Dompdf\\CanvasFactory'	=> __DIR__.'/src/CanvasFactory.php',
	'Dompdf\\Cellmap'	=> __DIR__.'/src/Cellmap.php',
	'Dompdf\\Dompdf'	=> __DIR__.'/src/Dompdf.php',
	'Dompdf\\Exception'	=> __DIR__.'/src/Exception.php',
	'Dompdf\\FontMetrics'	=> __DIR__.'/src/FontMetrics.php',
	'Dompdf\\Frame'	=> __DIR__.'/src/Frame.php',
	'Dompdf\\Helpers'	=> __DIR__.'/src/Helpers.php',
	'Dompdf\\JavascriptEmbedder'	=> __DIR__.'/src/JavascriptEmbedder.php',
	'Dompdf\\LineBox'	=> __DIR__.'/src/LineBox.php',
	'Dompdf\\Options'	=> __DIR__.'/src/Options.php',
	'Dompdf\\PhpEvaluator'	=> __DIR__.'/src/PhpEvaluator.php',
	'Dompdf\\Renderer'	=> __DIR__.'/src/Renderer.php',

	'Dompdf\\Adapter\\CPDF'	=> __DIR__.'/src/Adapter/CPDF.php',
	'Dompdf\\Adapter\\GD'	=> __DIR__.'/src/Adapter/GD.php',
	'Dompdf\\Adapter\\PDFLib'	=> __DIR__.'/src/Adapter/PDFLib.php',

	'Dompdf\\Css\\AttributeTranslator'	=> __DIR__.'/src/Css/AttributeTranslator.php',
	'Dompdf\\Css\\Color'	=> __DIR__.'/src/Css/Color.php',
	'Dompdf\\Css\\Style'	=> __DIR__.'/src/Css/Style.php',
	'Dompdf\\Css\\Stylesheet'	=> __DIR__.'/src/Css/Stylesheet.php',

	'Dompdf\\Exception\\ImageException'	=> __DIR__.'/src/Exception/ImageException.php',

	'Dompdf\\Frame\\Factory'	=> __DIR__.'/src/Frame/Factory.php',
	'Dompdf\\Frame\\FrameList'	=> __DIR__.'/src/Frame/FrameList.php',
	'Dompdf\\Frame\\FrameListIterator'	=> __DIR__.'/src/Frame/FrameListIterator.php',
	'Dompdf\\Frame\\FrameTree'	=> __DIR__.'/src/Frame/FrameTree.php',
	'Dompdf\\Frame\\FrameTreeIterator'	=> __DIR__.'/src/Frame/FrameTreeIterator.php',
	'Dompdf\\Frame\\FrameTreeList'	=> __DIR__.'/src/Frame/FrameTreeList.php',

	'Dompdf\\FrameDecorator\\AbstractFrameDecorator'	=> __DIR__.'/src/FrameDecorator/AbstractFrameDecorator.php',
	'Dompdf\\FrameDecorator\\Block'	=> __DIR__.'/src/FrameDecorator/Block.php',
	'Dompdf\\FrameDecorator\\Image'	=> __DIR__.'/src/FrameDecorator/Image.php',
	'Dompdf\\FrameDecorator\\Inline'	=> __DIR__.'/src/FrameDecorator/Inline.php',
	'Dompdf\\FrameDecorator\\ListBullet'	=> __DIR__.'/src/FrameDecorator/ListBullet.php',
	'Dompdf\\FrameDecorator\\ListBulletImage'	=> __DIR__.'/src/FrameDecorator/ListBulletImage.php',
	'Dompdf\\FrameDecorator\\NullFrameDetector'	=> __DIR__.'/src/FrameDecorator/NullFrameDecorator.php',
	'Dompdf\\FrameDecorator\\Page'	=> __DIR__.'/src/FrameDecorator/Page.php',
	'Dompdf\\FrameDecorator\\Table'	=> __DIR__.'/src/FrameDecorator/Table.php',
	'Dompdf\\FrameDecorator\\TableCell'	=> __DIR__.'/src/FrameDecorator/TableCell.php',
	'Dompdf\\FrameDecorator\\TableRow'	=> __DIR__.'/src/FrameDecorator/TableRow.php',
	'Dompdf\\FrameDecorator\\TableRowGroup'	=> __DIR__.'/src/FrameDecorator/TableRowGroup.php',
	'Dompdf\\FrameDecorator\\Text'	=> __DIR__.'/src/FrameDecorator/Text.php',

	'Dompdf\\FrameReflower\\AbstractFrameReflower'	=> __DIR__.'/src/FrameReflower/AbstractFrameReflower.php',
	'Dompdf\\FrameReflower\\Block'	=> __DIR__.'/src/FrameReflower/Block.php',
	'Dompdf\\FrameReflower\\Image'	=> __DIR__.'/src/FrameReflower/Image.php',
	'Dompdf\\FrameReflower\\Inline'	=> __DIR__.'/src/FrameReflower/Inline.php',
	'Dompdf\\FrameReflower\\ListBullet'	=> __DIR__.'/src/FrameReflower/ListBullet.php',
	'Dompdf\\FrameReflower\\NullFrameReflower'	=> __DIR__.'/src/FrameReflower/NulLFrameReflower.php',
	'Dompdf\\FrameReflower\\Page'	=> __DIR__.'/src/FrameReflower/Page.php',
	'Dompdf\\FrameReflower\\Table'	=> __DIR__.'/src/FrameReflower/Table.php',
	'Dompdf\\FrameReflower\\TableCell'	=> __DIR__.'/src/FrameReflower/TableCell.php',
	'Dompdf\\FrameReflower\\TableRow'	=> __DIR__.'/src/FrameReflower/TableRow.php',
	'Dompdf\\FrameReflower\\TableRowGroup'	=> __DIR__.'/src/FrameReflower/TableRowGroup.php',
	'Dompdf\\FrameReflower\\Text'	=> __DIR__.'/src/FrameReflower/Text.php',

	'Dompdf\\Image\\Cache'	=> __DIR__.'/src/Image/Cache.php',

	'Dompdf\\Positioner\\Absolute'	=> __DIR__.'/src/Positioner/Absolute.php',
	'Dompdf\\Positioner\\AbstractPositioner'	=> __DIR__.'/src/Positioner/AbstractPositioner.php',
	'Dompdf\\Positioner\\Block'	=> __DIR__.'/src/Positioner/Block.php',
	'Dompdf\\Positioner\\Fixed'	=> __DIR__.'/src/Positioner/Fixed.php',
	'Dompdf\\Positioner\\Inline'	=> __DIR__.'/src/Positioner/Inline.php',
	'Dompdf\\Positioner\\ListBullet'	=> __DIR__.'/src/Positioner/ListBullet.php',
	'Dompdf\\Positioner\\NullPositioner'	=> __DIR__.'/src/Positioner/NullPositioner.php',
	'Dompdf\\Positioner\\TableCell'	=> __DIR__.'/src/Positioner/TableCell.php',
	'Dompdf\\Positioner\\TableRow'	=> __DIR__.'/src/Positioner/TableRow.php',

	'Dompdf\\Renderer\\AbstractRenderer'	=> __DIR__.'/src/Renderer/AbstractRenderer.php',
	'Dompdf\\Renderer\\Block'	=> __DIR__.'/src/Renderer/Block.php',
	'Dompdf\\Renderer\\Image'	=> __DIR__.'/src/Renderer/Image.php',
	'Dompdf\\Renderer\\Inline'	=> __DIR__.'/src/Renderer/Inline.php',
	'Dompdf\\Renderer\\ListBullet'	=> __DIR__.'/src/Renderer/ListBullet.php',
	'Dompdf\\Renderer\\TableCell'	=> __DIR__.'/src/Renderer/TableCell.php',
	'Dompdf\\Renderer\\TableRowGroup'	=> __DIR__.'/src/Renderer/TableRowGroup.php',
	'Dompdf\\Renderer\\Text'	=> __DIR__.'/src/Renderer/Text.php',
));