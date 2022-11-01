<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Page01</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

<script>
    $(document).ready(function(){
    $(".tip-top").tooltip({
        placement : 'top'
    });
    $(".tip-right").tooltip({
        placement : 'right'
    });
    $(".tip-bottom").tooltip({
        placement : 'bottom'
    });
    $(".tip-left").tooltip({
        placement : 'left'
    });
});
$(document).ready(function(){
    $(".popover-top").popover({
        placement : 'top'
    });
    $(".popover-right").popover({
        placement : 'right'
    });
    $(".popover-bottom").popover({
        placement : 'bottom'
    });
    $(".popover-left").popover({
        placement : 'left'
    });
});
$(document).ready(function(){
        // Add minus icon for collapse element which is open by default
        $(".collapse.show").each(function(){
        	$(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
        });
        
        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
        	$(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
        }).on('hide.bs.collapse', function(){
        	$(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
        });
    });
</script>
</head>
<body>
<div >
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a href="#" class="navbar-brand">ExercicioUsuario</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a href="home.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="change.php" class="nav-link">MudarDados</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Paginas</a>
                    <div class="dropdown-menu">
                        <a href="page01.php" class="dropdown-item">Page01</a>
                        <a href="page02.php" class="dropdown-item">Page02</a>
                    </div>
                </li>
            </ul>
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Account</a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="cadastro.php" class="dropdown-item">Cadastrar</a>
                        <div class="dropdown-divider"></div>
                        <a href="#myModal"class="dropdown-item"data-toggle="modal">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>

<div class="m-4">
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="home.php">Home</a></li>
        <li class="breadcrumb-item active"><a href="page01.php">Page01</a></li>
      </ol>
    </nav>
</div>

<div class="m-4">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a href="#tab01" class="nav-link active" data-toggle="tab">tab01</a>
        </li>
        <li class="nav-item">
            <a href="#tab02" class="nav-link" data-toggle="tab">tab02</a>
        </li>
        <li class="nav-item">
            <a href="#tab03" class="nav-link" data-toggle="tab">tab03</a>
        </li>
    </ul>

    <div class="tab-content">
        <div class="tab-pane fade show active" id="tab01">
            <h2 class="m-4 tip-top" data-toggle="tooltip" title="tab01">TAB01</h2>
            <h2 class="m-4 tip-right"data-toggle="tooltip" title="tab02">TAB02</h2>
            <h2 class="m-4 tip-left"data-toggle="tooltip" title="tab03">TAB03</h2>
        </div>
         <div class="tab-pane fade" id="tab02">
            <table class="table table-striped table-dark">
                <thead>
                    <th>a</th>
                    <th>b</th>
                    <th>c</th>
                </thread>
                <tbody>
                    <tr>
                        <td class="popover-top"  data-toggle="popover" title="Q" data-content="Qqqq">q</td>
                        <td>w</td>
                        <td>e</td>
                    </tr>
                    <tr>
                        <td>a</td>
                        <td>s</td>
                        <td>d</td>
                    </tr>
                    <tr>
                        <td>z</td>
                        <td>x</td>
                        <td>c</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="tab-pane fade" id="tab03">
            <div class="accordion" id="accord">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne">
                                aaaa
                            </button>
                        </h2>
                    </div>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accord">
                        <div class="card-body">
                            <p>AAA</p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo">
                                bbbb
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accord">
                        <div class="card-body">
                            <p>BBB</p>
                        </div>
                    </div>
                </div>

            </div>


        </div>
</div>

<nav>
    <ul class="pagination justify-content-center">
        <li class="page-item"><a href="page01.php" class="page-link">prev</a>
        <li class="page-item active"><a href="page01.php" class="page-link">01</a>
        <li class="page-item"><a href="page02.php" class="page-link">02</a>
        <li class="page-item"><a href="page02.php" class="page-link">next</a>

    </ul>
</nav>

<div id="myModal" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>are you sure want to logout?</p>
                    <p class="text-secondary"><small>the session will be ended.</small></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <a href="logout.php"><button type="button" class="btn btn-primary">LOGOUT</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>                            