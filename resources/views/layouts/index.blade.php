<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="{{ mix('css/admin.css') }}" rel="stylesheet">
  <script src="{{ mix('js/admin.js') }}" defer></script>
{{--   <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css" rel="stylesheet">
  <link href="../../public/assets/plugins/DataTables-1.10.20/datatables.min.css" rel="stylesheet">
   --}}
</head>
<body class="d-flex flex-column h-100">
  <nav id="top_navbar" class="navbar navbar-expand-md fixed-top navbar-dark bg-dark p-0 shadow">
    <a class="navbar-brand text-nowrap pl-1" href="#" style="max-width: 80%;">
    <!-- <img src="https://getbootstrap.com/docs/4.1/assets/brand/bootstrap-solid.svg" width="30" height="30"
      class="d-inline-block" alt=""> -->
      <img id="top_navbar_logo" src="{{asset('/images/logo_white.png')}}" class="d-inline-block pl-0" >
      <!-- Doofenshmirtz Evil Inc. -->
    </a>
    <button class="btn btn-link d-md-none" type="button" data-toggle="collapse" data-target="#collapsible_navbar_container" aria-controls="collapsible_navbar_container"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="collapsible_navbar_container" class="collapse navbar-collapse bg-md-primary">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Link 1</a>
        </li>
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Link 2</a>
        </li>
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Link 2</a>
        </li>
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Link 2</a>
        </li>
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Link 2</a>
        </li>
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Link 2</a>
        </li>
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Link 2</a>
        </li>
        <li class="nav-item text-nowrap">
          <form method="post" action="{{route('logout')}}">
            @csrf
            <button type="submit" class="nav-link">Sign out</button>
          </form>
        </li>
        <li class="nav-item d-flex sidebar-item d-sm-block d-md-none">
          <a class="nav-link flex-grow-1" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
            class="feather"><path d="M313.6 304c-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM400 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4 14.6 0 38.3 16 89.6 16 51.7 0 74.9-16 89.6-16 47.6 0 86.4 38.8 86.4 86.4V464zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0 80 64.5 80 144s64.5 144 144 144zm0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96z"/></svg>
            Title 1 Title 1 Title 1 Title 1
          </a>
          <span></span>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          <ul class="nav d-flex flex-column text-uppercase text-truncate">
            <li class="nav-item d-flex active">
              <a class="nav-link flex-grow-1 text-wrap" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                  class="feather"><path d="M313.6 304c-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM400 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4 14.6 0 38.3 16 89.6 16 51.7 0 74.9-16 89.6-16 47.6 0 86.4 38.8 86.4 86.4V464zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0 80 64.5 80 144s64.5 144 144 144zm0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96z"/></svg>
                Title 1 Title 1 Title 1 Title 1
              </a>
              <span></span>
            </li>
            <li class="nav-item d-flex">
              <a class="nav-link flex-grow-1" href="#" style="height: 100%;">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                  class="feather"><path d="M313.6 304c-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM400 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4 14.6 0 38.3 16 89.6 16 51.7 0 74.9-16 89.6-16 47.6 0 86.4 38.8 86.4 86.4V464zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0 80 64.5 80 144s64.5 144 144 144zm0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96z"/></svg>
                Title 2 <span class="sr-only">(current)</span>
              </a>
              <span></span>
            </li>
            <li class="nav-item d-flex active">
              <a class="nav-link flex-grow-1" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                  class="feather"><path d="M313.6 304c-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM400 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4 14.6 0 38.3 16 89.6 16 51.7 0 74.9-16 89.6-16 47.6 0 86.4 38.8 86.4 86.4V464zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0 80 64.5 80 144s64.5 144 144 144zm0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96z"/></svg>
                Title 3
              </a>
              <span></span>
            </li>
          </ul>
        </div>
      </nav>
      <main role="main" class="col-md-10 ml-sm-auto px-0">
        <nav id="breadcrumb_nav" aria-label="breadcrumb" class="position-fixed px-0 col-md-10 d-none d-md-block">
          <ol class="breadcrumb px-3 border-bottom bg-light">
            <li class="breadcrumb-item px-0 text-truncate"><a href="#">Library adipisicing voluptate tempor.</a></li>
            <li class="breadcrumb-item px-0 text-truncate"><a href="#">Library adipisicing </a></li>
            <li class="breadcrumb-item px-0 text-truncate active" aria-current="page"><span>Library adipisicing voluptate tempor.</span></li>
          </ol>
        </nav>
        <div id="page_content" class="container-fluid px-4">
          <h3 class="text-capitalize">Full width form</h3>
          <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input id="exampleInputEmail1" type="text" class="form-control form-control-sm" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input id="exampleInputPassword1" type="password" class="form-control form-control-sm">
            </div>
          </form>
          <h3 class="text-capitalize">Horizontal form</h3>
          <form class="horizontal-form">
            <div class="form-row">
              <div class="col-lg">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="text" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
              </div>
              <div class="col-lg">
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control form-control-sm" id="exampleInputPassword1">
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-lg">
                <div class="form-group">
                  <label>Select One</label>
                  <select class="js-select2 form-control">
                    <option>Select A</option>
                    <option>Select B</option>
                    <option>Select C</option>
                    <option>Select D</option>
                    <option>Select E</option>
                    <option>Select F</option>
                  </select> 
                </div>
              </div>
              <div class="col-lg">
                <div class="form-group">
                  <label>Select Multiple</label>
                  <select class="js-select2-multi form-control" multiple="multiple">
                    <option>Select A</option>
                    <option>Select B</option>
                    <option>Select C</option>
                    <option>Select D</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-lg">
                <div class="form-group">
                  <label>Large options text</label>
                  <select class="large js-select2 form-control">
                    <option>Super Long Text Super Long Text Super Long Text Super Long Text Super Long Text</option>
                    <option>Long Text Long Text Long Text</option>
                    <option>Text Text Text</option>
                    <option>Super Long Text Super Long Text Super Long Text Super Long Text Super Long Text</option>
                    <option>Text Text Text</option>
                    <option>Text Text Text</option>
                    <option>Super Long Text Super Long Text Super Long Text Super Long Text Super Long Text</option>
                  </select>
                </div>
              </div>
              <div class="col-lg">
              </div>
            </div>
            <div class="float-right">              
              <button class="btn btn-sm btn-secondary">Cancel</button>
              <button type="submit" class="btn btn-sm btn-primary">Submit</button>
            </div>
          </form>
          <div class="clearfix"></div>
          <h3 class="text-capitalize">Title</h3>
          <button id="reinit_table" class="btn btn-sm btn-success float-right">Reinitialize Table</button>
          <table id="table_1" class="table table-bordered table-striped table-sm dt-responsive nowrap" style="width:100%">
            <thead class="thead-light">
              <tr>
                <th>Header</th>
                <th>Header</th>
                <th>Header</th>
                <th>Header</th>
                <th>Header</th>
                <th>Header</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
              </tr>
            </tbody>
          </table>
        </div>
      </main>
    </div>
  </div>
  <footer class="footer py-1 px-2 fixed-bottom bg-dark">
    <div class="float-left">
      <span class="text-muted mx-auto">Place sticky footer content here.</span>
    </div>
  </footer>
{{--   <script src="../../public/assets/jquery-3.4.1.min.js" type="text/javascript"></script>
  <script src="../../public/assets/plugins/select2-4.0.13/js/select2.full.min.js" type="text/javascript"></script>
  <script src="../../public/assets/plugins/select2-4.0.13/js/i18n/es.js" type="text/javascript"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>
  <script src="../../public/assets/plugins/DataTables-1.10.20/datatables.min.js" type="text/javascript"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js" type="text/javascript"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js" type="text/javascript"></script>
  <script src="../../public/assets/bootstrap-4.4.1/dist/js/bootstrap.min.js" type="text/javascript"></script> --}}
  <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
      $(".js-select2").select2();
      $(".js-select2-multi").select2();
      $(".large").select2();
      $('#table_1').DataTable({
        destroy: true,
        ajax: "{{asset('arrays.txt')}}"
      });
    });
    document.getElementById('reinit_table').addEventListener('click', function() {
      $('#table_1').DataTable({
        destroy: true,
        ajax: '../../public/arrays.txt'
      });
    });
  </script>
</body>
</html>