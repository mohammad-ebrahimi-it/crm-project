<template>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">


                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Customer</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" @click="clearModal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="alert alert-success" v-if="success.length>0">{{ success }}</p>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                   placeholder="Example: ali"
                                   name="first_name"
                                   v-model="first_name"
                            >
                            <ul v-if="error" class="list-unstyled">
                                <li v-for="err of error" class="alert alert-danger">{{ err }}</li>
                            </ul>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1"> Address Number</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                   placeholder="Example: 123"
                                   name="address_number"
                                   v-model="address_number"
                            >
                            <ul v-if="error" class="list-unstyled">
                                <li v-for="err of error" class="alert alert-danger">{{ err }}</li>
                            </ul>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Address Street</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                   placeholder="Example: iran, isfahan, ..."
                                   name="address_street"
                                   v-model="address_street"
                            >
                            <ul v-if="error" class="list-unstyled">
                                <li v-for="err of error" class="alert alert-danger">{{ err }}</li>
                            </ul>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Phone Number</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                   placeholder="Example: 9900723195"
                                   name="phone_number"
                                   v-model="phone_number"
                            >
                            <ul v-if="error" class="list-unstyled">
                                <li v-for="err of error" class="alert alert-danger">{{ err }}</li>
                            </ul>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Select Employees</label>
                            <select multiple="" class="form-control" id="exampleFormControlSelect2"
                                    name="employee_id">
                                <option value="">1</option>

                            </select>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" @click="clearModal">Close
                        </button>
                        <button type="button" class="btn btn-primary" v-on:click="add">save</button>
                    </div>

            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            error: [],
            first_name: null,
            address_number: null,
            address_street: null,
            phone_number: null,
            success: ''
        }
    },
    methods: {
        add() {
            axios.get('#/customer/store', {
                first_name: this.first_name,
                address_number: this.address_number,
                address_street: this.address_street,
                phone_number: this.phone_number,
            })
                .then((data) => {

                    this.$emit('insertData', data.data);
                    this.success = 'successfully';
                })
                .catch((error) => {
                    this.error = error.response.data.errors.name;
                })
            this.first_name = '';
            this.address_number = '';
            this.address_street = '';
            this.phone_number = '';
            this.error = [];
        },
        clearModal() {
            this.error = [];
            this.first_name = '';
            this.address_number = '';
            this.address_street = '';
            this.phone_number = '';
            this.success = '';

        }
    }


}
</script>
