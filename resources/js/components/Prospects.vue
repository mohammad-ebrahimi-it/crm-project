<template>
    <div>
        <div>
            <div id="container-wrapper" class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mb-4"><h1
                    class="h3 mb-0 text-gray-800">
                    Prospects</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <router-link to="/">Home</router-link>
                        </li>
                        <li class="breadcrumb-item">Tables</li>
                        <li aria-current="page" class="breadcrumb-item active">Prospects</li>
                    </ol>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between"><h6
                                class="m-0 font-weight-bold text-primary">DataTables Prospects</h6></div>
                            <div class="table-responsive p-3">
                                <div id="dataTableHover_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="dataTableHover" role="grid"
                                                   aria-describedby="dataTableHover_info"
                                                   class="table align-items-center table-flush table-hover dataTable">
                                                <thead class="thead-light">
                                                <tr role="row">
                                                    <th tabindex="0" aria-controls="dataTableHover" rowspan="1"
                                                        colspan="1"
                                                        aria-sort="ascending"
                                                        aria-label="Name: activate to sort column descending"
                                                        class="sorting_asc" style="width: 181.6px;">Id
                                                    </th>
                                                    <th tabindex="0" aria-controls="dataTableHover" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Position: activate to sort column ascending"
                                                        class="sorting" style="width: 285.25px;">Name
                                                    </th>
                                                    <th tabindex="0" aria-controls="dataTableHover" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Office: activate to sort column ascending"
                                                        class="sorting" style="width: 135.317px;">Address Number
                                                    </th>
                                                    <th tabindex="0" aria-controls="dataTableHover" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Age: activate to sort column ascending"
                                                        class="sorting"
                                                        style="width: 54.6333px;">Address street
                                                    </th>
                                                    <th tabindex="0" aria-controls="dataTableHover" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Start date: activate to sort column ascending"
                                                        class="sorting" style="width: 118.317px;">Phone Number
                                                    </th>
                                                    <th tabindex="0" aria-controls="dataTableHover" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Start date: activate to sort column ascending"
                                                        class="sorting" style="width: 118.317px;">Customer
                                                    </th>

                                                </tr>
                                                </thead>
                                                <tfoot>
                                                <tr>
                                                    <th rowspan="1" colspan="1">id</th>
                                                    <th rowspan="1" colspan="1">Name</th>
                                                    <th rowspan="1" colspan="1">Address Number</th>
                                                    <th rowspan="1" colspan="1">Address street</th>
                                                    <th rowspan="1" colspan="1">Phone Number</th>
                                                    <th rowspan="1" colspan="1">Customer</th>

                                                </tr>
                                                </tfoot>
                                                <tbody>
                                                <tr role="row" class="odd" v-for="prospect in prospects"
                                                    :key="prospect.prospect_id">
                                                    <td class="sorting_1">{{ prospect.prospect_id }}</td>
                                                    <td>{{ prospect.pro_name }}</td>
                                                    <td>{{ prospect.address_number }}</td>
                                                    <td>{{ prospect.address_street }}</td>
                                                    <td>{{ prospect.phone_number }}</td>
                                                    <td>{{ prospect.cus_name }}</td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-outline-info mb-1" data-toggle="modal"
                                            data-target="#exampleModal">
                                        Add +
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div id="model">
                    <AddProspect @insertData="reloadPage"></AddProspect>
                </div>
            </div>

        </div>
    </div>
</template>
<script>

import AddProspect from "./AddProspect";

export default {
    components: {AddProspect},
    data() {
        return {
            prospects: null
        }
    },
    created() {
        axios
            .get('http://localhost/crm-project/public/prospect/get')
            .then((response) => {
                this.prospects = response.data
            }).catch((error) => {
            console.log(error);
        })
    },
    methods: {
        reloadPage() {
            window.location.reload();
        }
    }

}
</script>
