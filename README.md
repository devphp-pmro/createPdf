# Create PDF from DomPdf



To install the library, run the following command:

``` sh
composer require devphp-pmro/createPdf
```

To use the library, simply require the composer to autoload, invoke the class and call the method:

``` sh

<? php

require __DIR__. '/vendor/autoload.php';

use Source\Pdf;
    
    require_once $_SERVER['DOCUMENT_ROOT']."/createPdf/vendor/autoload.php";
    
    1º param - root directory.
    2º param - root directory for pictures and css
    $pdf = new Pdf("createPdf/","createPdf/"); 
    
   
    1º param - (require) com caminho para pasta root do arquivo. 
    2º param - template name a ser convertido em pdf.
    3º param - tamanho do papel.
    4º param - orientação do papel
    5º param - nome do arquivo a ser criado (não colocar o (.pdf), se não especificado date('d-m-Y').'.pdf'
    
    $pdf->createPdf("createPdf/","template.html","A4","portrait", "template");
    
    ?>
```

### Developers
* [Leonardo] - Developer of this library!
* [devphp] - Official website: <https://devphp-pmro.github.io/>
* [Pdf] - Lib from DomPdf

License
----

MIT