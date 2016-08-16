<div class="container-fluid">
    <div class="page-header">
        <h1>Prehlad Postitov <small> </small></h1></div>
</div>
<div class="container-fluid">
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Panel Heading</h3></div>
        <div class="panel-body">
            <div class="table-responsive">
                <table id="postitzoznam" data-toggle="table" data-striped="true" data-locale="sk-SK" data-pagination="true" page-size="10" data-search="true" data-show-columns="true" data-show-refresh="true" data-show-pagination-switch="true" data-url="<?php echo URL; ?>postit/nacitaj" data-filter-control="true" data-show-toggle="true" data-filter-show-clear="true" data-show-export="true" data-export-types="['excel', 'pdf', 'csv']" data-export-options="{jspdf: {orientation: 'l'}}">
                    <thead>
                        <tr>
                            <th data-sortable="true" data-field="ID" data-filter-control="input">Postit ID</th>
                            <th data-sortable="true" data-field="STAV_KOD" data-filter-control="select">Stav</th>
                            <th data-sortable="true" data-field="MIESTO_DETEKCIE" data-filter-control="select">M. Detekcie</th>
                            <th data-sortable="true" data-field="DATUM" data-filter-control="datepicker" data-filter-datepicker-options='{"language": "sk", "autoclose": true}'>Dat. vytv.</th>
                            <th data-sortable="true" data-field="VIS" data-filter-control="input">VIS</th>
                            <th data-sortable="true" data-field="RFS" data-filter-control="input">RFS</th>
                            <th data-sortable="true" data-field="RFS_POPIS" data-filter-control="input">Popis RFS</th>
                            <th data-sortable="true" data-field="NATURE" data-filter-control="input">Nature</th>
                            <th data-sortable="true" data-field="NATURE_POPIS" data-filter-control="input">Popis Nature</th>
                            <th data-sortable="true" data-field="UR" data-filter-control="select">UR</th>
                            <th data-sortable="true" data-field="UEP" data-filter-control="select">UEP</th>
                            <th data-sortable="true" data-field="ZMENA" data-filter-control="select">Zmena</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="panel-footer">
            <div class="row">
                <div class="col-sm-6">
                    <h4>Pocet: XY</h4></div>
                <div class="col-sm-6">
                    <nav>
                        <ul class="pagination pagination-sm">
                            <li><a aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                            <li><a>1</a></li>
                            <li><a>2</a></li>
                            <li><a>3</a></li>
                            <li><a>4</a></li>
                            <li><a>5</a></li>
                            <li><a aria-label="Next"><span aria-hidden="true">»</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>