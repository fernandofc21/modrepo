<!-- <!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

        

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                	@yield('contenido')
                </div>
            </div>
        </div>
    </body>
</html> -->

<html>
<head>
  <style>
    body{
      font-family: sans-serif;
    }
    @page {
      margin: 160px 50px;
    }
    header { position: fixed;
      left: 0px;
      top: -160px;
      right: 0px;
      height: 100px;
      background-color: #ddd;
      text-align: center;
    }
    header h1{
      margin: 10px 0;
    }
    header h2{
      margin: 0 0 10px 0;
    }
    footer {
      position: fixed;
      left: 0px;
      bottom: -50px;
      right: 0px;
      height: 40px;
      border-bottom: 2px solid #ddd;
    }
    footer .page:after {
      content: counter(page);
    }
    footer table {
      width: 100%;
    }
    footer p {
      text-align: right;
    }
    footer .izq {
      text-align: left;
    }
  </style>
<body>
  <header>
    <h1>GVG Venalum</h1>
    <h2>Reporte de Inventario.</h2>
  </header>
  
@yield('contenido')




  <footer>

    <table>
      <tr>
        <td>
            <p class="izq">
              CVG Venalum. 

            </p>
        </td>
        <td>
          <p class="page">
            Página

          </p>
        </td>
      </tr>
    </table>
  </footer>
  
</body>

</html>