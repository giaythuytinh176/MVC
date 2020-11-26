<?php require_once "./src/admin/views/pages/blocks/header.php" ?>
<style>
    table.dataTable thead .sorting:after,
    table.dataTable thead .sorting:before,
    table.dataTable thead .sorting_asc:after,
    table.dataTable thead .sorting_asc:before,
    table.dataTable thead .sorting_asc_disabled:after,
    table.dataTable thead .sorting_asc_disabled:before,
    table.dataTable thead .sorting_desc:after,
    table.dataTable thead .sorting_desc:before,
    table.dataTable thead .sorting_desc_disabled:after,
    table.dataTable thead .sorting_desc_disabled:before {
        bottom: .5em;
    }
</style>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Products (displaying records 1-5 from 5)</h1>
    </div>

    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h5 class="m-0 font-weight-bold text-primary">Tất cả các sản phẩm</h5>
                </div>
                <!-- Card Body -->
                <div class="card-body">

                    <div class='table-responsive'>
                        <table id="ListProduct" class="table table-bordered table-hover table-sm" cellspacing="0"
                               width="100%">
                            <thead>
                            <tr>
                                <th style="width: 1%">
                                    <input type="checkbox" class="select-all checkbox" name="select-all"/>
                                </th>
                                <th style="width: 24%" class="success">Name</th>
                                <th style="width: 24%" class="warning">Gender</th>
                                <th style="width: 24%" class="danger">Age</th>
                                <th style="width: 24%" class="info">Birth</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="active">
                                    <input type="checkbox" class="select-item checkbox" name="select-item"
                                           value="1000"/>
                                </td>
                                <td class="success">Tom</td>
                                <td class="warning">boy</td>
                                <td class="danger">20</td>
                                <td class="info">09-20</td>
                            </tr>
                            <tr>
                                <td class="active">
                                    <input type="checkbox" class="select-item checkbox" name="select-item"
                                           value="1001"/>
                                </td>
                                <td class="success">andy</td>
                                <td class="warning">girl</td>
                                <td class="danger">21</td>
                                <td class="info">09-21</td>
                            </tr>
                            <tr>
                                <td class="active">
                                    <input type="checkbox" class="select-item checkbox" name="select-item"
                                           value="1002"/>
                                </td>
                                <td class="success">Alina</td>
                                <td class="warning">girl</td>
                                <td class="danger">22</td>
                                <td class="info">09-22</td>
                            </tr>
                            <tr>
                                <td class="active">
                                    <input type="checkbox" class="select-item checkbox" name="select-item"
                                           value="1003"/>
                                </td>
                                <td class="success">Aaron</td>
                                <td class="warning">boy</td>
                                <td class="danger">23</td>
                                <td class="info">09-23</td>
                            </tr>
                            <tr>
                                <td class="active">
                                    <input type="checkbox" class="select-item checkbox" name="select-item"
                                           value="1003"/>
                                </td>
                                <td class="success">Aaron</td>
                                <td class="warning">boy</td>
                                <td class="danger">23</td>
                                <td class="info">09-23</td>
                            </tr>
                            <tr>
                                <td class="active">
                                    <input type="checkbox" class="select-item checkbox" name="select-item"
                                           value="1003"/>
                                </td>
                                <td class="success">Aaron</td>
                                <td class="warning">boy</td>
                                <td class="danger">23</td>
                                <td class="info">09-23</td>
                            </tr>
                            <tr>
                                <td class="active">
                                    <input type="checkbox" class="select-item checkbox" name="select-item"
                                           value="1003"/>
                                </td>
                                <td class="success">Aaron</td>
                                <td class="warning">boy</td>
                                <td class="danger">23</td>
                                <td class="info">09-23</td>
                            </tr>
                            <tr>
                                <td class="active">
                                    <input type="checkbox" class="select-item checkbox" name="select-item"
                                           value="1003"/>
                                </td>
                                <td class="success">Aaron</td>
                                <td class="warning">boy</td>
                                <td class="danger">23</td>
                                <td class="info">09-23</td>
                            </tr>
                            <tr>
                                <td class="active">
                                    <input type="checkbox" class="select-item checkbox" name="select-item"
                                           value="1003"/>
                                </td>
                                <td class="success">Aaron</td>
                                <td class="warning">boy</td>
                                <td class="danger">23</td>
                                <td class="info">09-23</td>
                            </tr>
                            <tr>
                                <td class="active">
                                    <input type="checkbox" class="select-item checkbox" name="select-item"
                                           value="1003"/>
                                </td>
                                <td class="success">Aaron</td>
                                <td class="warning">boy</td>
                                <td class="danger">23</td>
                                <td class="info">09-23</td>
                            </tr>
                            <tr>
                                <td class="active">
                                    <input type="checkbox" class="select-item checkbox" name="select-item"
                                           value="1003"/>
                                </td>
                                <td class="success">Aaron</td>
                                <td class="warning">boy</td>
                                <td class="danger">23</td>
                                <td class="info">09-23</td>
                            </tr>
                            <tr>
                                <td class="active">
                                    <input type="checkbox" class="select-item checkbox" name="select-item"
                                           value="1003"/>
                                </td>
                                <td class="success">Aaron</td>
                                <td class="warning">boy</td>
                                <td class="danger">23</td>
                                <td class="info">09-23</td>
                            </tr>
                            <tr>
                                <td class="active">
                                    <input type="checkbox" class="select-item checkbox" name="select-item"
                                           value="1003"/>
                                </td>
                                <td class="success">Aaron</td>
                                <td class="warning">boy</td>
                                <td class="danger">23</td>
                                <td class="info">09-23</td>
                            </tr>
                            <tr>
                                <td class="active">
                                    <input type="checkbox" class="select-item checkbox" name="select-item"
                                           value="1003"/>
                                </td>
                                <td class="success">Aaron</td>
                                <td class="warning">boy</td>
                                <td class="danger">23</td>
                                <td class="info">09-23</td>
                            </tr>
                            <tr>
                                <td class="active">
                                    <input type="checkbox" class="select-item checkbox" name="select-item"
                                           value="1003"/>
                                </td>
                                <td class="success">Aaron</td>
                                <td class="warning">boy</td>
                                <td class="danger">23</td>
                                <td class="info">09-23</td>
                            </tr>
                            <tr>
                                <td class="active">
                                    <input type="checkbox" class="select-item checkbox" name="select-item"
                                           value="1003"/>
                                </td>
                                <td class="success">Aaron</td>
                                <td class="warning">boy</td>
                                <td class="danger">23</td>
                                <td class="info">09-23</td>
                            </tr>
                            </tbody>
                        </table>
                        <button id="select-all" class="btn button-default">SelectAll/Cancel</button>
                        <button id="select-invert" class="btn button-default">Invert</button>
                        <button id="selected" class="btn button-default">GetSelected</button>
                        </body>
                    </div>


                    <div class='table-responsive'>
                        <table id="ListProduct1" class="table table-bordered table-hover table-sm" cellspacing="0"
                               width="100%">
                            <thead>
                            <tr>
                                <th>
                                    <!-- Default unchecked -->
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="tableDefaultCheck1">
                                        <label class="custom-control-label" for="tableDefaultCheck1">Check 1</label>
                                    </div>
                                </th>
                                <th class="th-sm">Name

                                </th>
                                <th class="th-sm">Position

                                </th>
                                <th class="th-sm">Office

                                </th>
                                <th class="th-sm">Age

                                </th>
                                <th class="th-sm">Start date

                                </th>
                                <th class="th-sm">Salary

                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>
                                    <!-- Default unchecked -->
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="tableDefaultCheck2">
                                        <label class="custom-control-label" for="tableDefaultCheck2">Check 2</label>
                                    </div>
                                </th>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                            </tr>
                            <tr>
                                <th>
                                    <!-- Default unchecked -->
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="tableDefaultCheck3">
                                        <label class="custom-control-label" for="tableDefaultCheck3">Check 3</label>
                                    </div>
                                </th>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011/07/25</td>
                                <td>$170,750</td>
                            </tr>
                            <tr>
                                <th>
                                    <!-- Default unchecked -->
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="tableDefaultCheck4">
                                        <label class="custom-control-label" for="tableDefaultCheck4">Check 4</label>
                                    </div>
                                </th>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <td>$86,000</td>
                            </tr>
                            <tr>
                                <th>
                                    <!-- Default unchecked -->
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="tableDefaultCheck5">
                                        <label class="custom-control-label" for="tableDefaultCheck5">Check 5</label>
                                    </div>
                                </th>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2012/03/29</td>
                                <td>$433,060</td>
                            </tr>
                            <tr>
                                <th>
                                    <!-- Default unchecked -->
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="tableDefaultCheck6">
                                        <label class="custom-control-label" for="tableDefaultCheck6">Check 6</label>
                                    </div>
                                </th>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td>2008/11/28</td>
                                <td>$162,700</td>
                            </tr>
                            <tr>
                                <th>
                                    <!-- Default unchecked -->
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="tableDefaultCheck7">
                                        <label class="custom-control-label" for="tableDefaultCheck7">Check 7</label>
                                    </div>
                                </th>
                                <td>Brielle Williamson</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>2012/12/02</td>
                                <td>$372,000</td>
                            </tr>
                            <tr>
                                <th>
                                    <!-- Default unchecked -->
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="tableDefaultCheck8">
                                        <label class="custom-control-label" for="tableDefaultCheck8">Check 8</label>
                                    </div>
                                </th>
                                <td>Herrod Chandler</td>
                                <td>Sales Assistant</td>
                                <td>San Francisco</td>
                                <td>59</td>
                                <td>2012/08/06</td>
                                <td>$137,500</td>
                            </tr>
                            <tr>
                                <th>
                                    <!-- Default unchecked -->
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="tableDefaultCheck9">
                                        <label class="custom-control-label" for="tableDefaultCheck9">Check 9</label>
                                    </div>
                                </th>
                                <td>Rhona Davidson</td>
                                <td>Integration Specialist</td>
                                <td>Tokyo</td>
                                <td>55</td>
                                <td>2010/10/14</td>
                                <td>$327,900</td>
                            </tr>
                            <tr>
                                <th>
                                    <!-- Default unchecked -->
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="tableDefaultCheck10">
                                        <label class="custom-control-label" for="tableDefaultCheck10">Check 10</label>
                                    </div>
                                </th>
                                <td>Colleen Hurst</td>
                                <td>Javascript Developer</td>
                                <td>San Francisco</td>
                                <td>39</td>
                                <td>2009/09/15</td>
                                <td>$205,500</td>
                            </tr>
                            <tr>
                                <th>
                                    <!-- Default unchecked -->
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="tableDefaultCheck11">
                                        <label class="custom-control-label" for="tableDefaultCheck11">Check 11</label>
                                    </div>
                                </th>
                                <td>Sonya Frost</td>
                                <td>Software Engineer</td>
                                <td>Edinburgh</td>
                                <td>23</td>
                                <td>2008/12/13</td>
                                <td>$103,600</td>
                            </tr>
                            <tr>
                                <th>
                                    <!-- Default unchecked -->
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="tableDefaultCheck12">
                                        <label class="custom-control-label" for="tableDefaultCheck12">Check 12</label>
                                    </div>
                                </th>
                                <td>Jena Gaines</td>
                                <td>Office Manager</td>
                                <td>London</td>
                                <td>30</td>
                                <td>2008/12/19</td>
                                <td>$90,560</td>
                            </tr>
                            <tr>
                                <th>
                                    <!-- Default unchecked -->
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="tableDefaultCheck13">
                                        <label class="custom-control-label" for="tableDefaultCheck13">Check 13</label>
                                    </div>
                                </th>
                                <td>Quinn Flynn</td>
                                <td>Support Lead</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2013/03/03</td>
                                <td>$342,000</td>
                            </tr>

                            </tbody>
                            <tfoot>
                            <tr>
                            <tr>
                                <th>
                                    <!-- Default unchecked -->
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="tableDefaultCheck14">
                                        <label class="custom-control-label" for="tableDefaultCheck14">Check 14</label>
                                    </div>
                                </th>
                                <th>Name
                                </th>
                                <th>Position
                                </th>
                                <th>Office
                                </th>
                                <th>Age
                                </th>
                                <th>Start date
                                </th>
                                <th>Salary
                                </th>
                            </tr>
                            </tfoot>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<?php require_once "./src/admin/views/pages/blocks/footer.php" ?>
