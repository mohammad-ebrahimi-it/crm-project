<template>
    <div>
        <div id="container-wrapper" class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4"><h1 class="h3 mb-0 text-gray-800">
                DataTables</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li aria-current="page" class="breadcrumb-item active">DataTables</li>
                </ol>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between"><h6
                            class="m-0 font-weight-bold text-primary">DataTables with Hover</h6></div>
                        <div class="table-responsive p-3">
                            <div id="dataTableHover_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="dataTableHover" role="grid" aria-describedby="dataTableHover_info"
                                               class="table align-items-center table-flush table-hover dataTable">
                                            <thead class="thead-light">
                                            <tr role="row">
                                                <th tabindex="0" aria-controls="dataTableHover" rowspan="1" colspan="1"
                                                    aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending"
                                                    class="sorting_asc" style="width: 181.6px;">Name
                                                </th>
                                                <th tabindex="0" aria-controls="dataTableHover" rowspan="1" colspan="1"
                                                    aria-label="Position: activate to sort column ascending"
                                                    class="sorting" style="width: 285.25px;">Position
                                                </th>
                                                <th tabindex="0" aria-controls="dataTableHover" rowspan="1" colspan="1"
                                                    aria-label="Office: activate to sort column ascending"
                                                    class="sorting" style="width: 135.317px;">Office
                                                </th>
                                                <th tabindex="0" aria-controls="dataTableHover" rowspan="1" colspan="1"
                                                    aria-label="Age: activate to sort column ascending" class="sorting"
                                                    style="width: 54.6333px;">Age
                                                </th>
                                                <th tabindex="0" aria-controls="dataTableHover" rowspan="1" colspan="1"
                                                    aria-label="Start date: activate to sort column ascending"
                                                    class="sorting" style="width: 118.317px;">Start date
                                                </th>
                                                <th tabindex="0" aria-controls="dataTableHover" rowspan="1" colspan="1"
                                                    aria-label="Salary: activate to sort column ascending"
                                                    class="sorting" style="width: 116.083px;">Salary
                                                </th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th rowspan="1" colspan="1">Name</th>
                                                <th rowspan="1" colspan="1">Position</th>
                                                <th rowspan="1" colspan="1">Office</th>
                                                <th rowspan="1" colspan="1">Age</th>
                                                <th rowspan="1" colspan="1">Start date</th>
                                                <th rowspan="1" colspan="1">Salary</th>
                                            </tr>
                                            </tfoot>
                                            <tbody>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">Airi Satou</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>33</td>
                                                <td>2008/11/28</td>
                                                <td>$162,700</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="sorting_1">Angelica Ramos</td>
                                                <td>Chief Executive Officer (CEO)</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2009/10/09</td>
                                                <td>$1,200,000</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="sorting_1">Bradley Greer</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>41</td>
                                                <td>2012/10/13</td>
                                                <td>$132,000</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">Brenden Wagner</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>28</td>
                                                <td>2011/06/07</td>
                                                <td>$206,850</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="sorting_1">Brielle Williamson</td>
                                                <td>Integration Specialist</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2012/12/02</td>
                                                <td>$372,000</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">Bruno Nash</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>38</td>
                                                <td>2011/05/03</td>
                                                <td>$163,500</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="sorting_1">Caesar Vance</td>
                                                <td>Pre-Sales Support</td>
                                                <td>New York</td>
                                                <td>21</td>
                                                <td>2011/12/12</td>
                                                <td>$106,450</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">Cara Stevens</td>
                                                <td>Sales Assistant</td>
                                                <td>New York</td>
                                                <td>46</td>
                                                <td>2011/12/06</td>
                                                <td>$145,600</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="sorting_1">Cedric Kelly</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2012/03/29</td>
                                                <td>$433,060</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12"><p>DataTables is a third party plugin that is used to generate the demo table
                    below. For more information
                    about DataTables, please visit the official <a href="https://datatables.net/" target="_blank">DataTables
                        documentation.</a></p></div>
            </div>
            <div id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
                 aria-hidden="true" class="modal fade">
                <div role="document" class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header"><h5 id="exampleModalLabelLogout" class="modal-title">Ohh No!</h5>
                            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span
                                aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body"><p>Are you sure you want to logout?</p></div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-outline-primary">Cancel</button>
                            <a href="login.html" class="btn btn-primary">Logout</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {}
</script>

