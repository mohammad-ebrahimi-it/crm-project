<template>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">


                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Prospect</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" @click="clearModal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <div  v-if="success.length>0" >
                    <p class="alert alert-success" v-if="success == 'add prospect successfully'">{{ success }}</p>
                        <p class="alert alert-danger" v-if="success == 'field customer id is repetitious'">{{success}}</p>
                    </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="pro_name">Name</label>
                        <input type="text" class="form-control" id="pro_name"
                               placeholder="Example: ali"
                               name="pro_name"
                               v-model="pro_name"
                        >

                        <ul v-if="error" class="list-unstyled" v-for="err of error.pro_name">
                            <li  class="alert alert-danger">{{ err }}</li>
                        </ul>
                    </div>
                    <div class="form-group">
                        <label for="address_number"> Address Number</label>
                        <input type="text" class="form-control" id="address_number"
                               placeholder="Example: 123"
                               name="address_number"
                               v-model="address_number"
                        >
                        <ul v-if="error" class="list-unstyled">
                            <li v-for="err of error.address_number" class="alert alert-danger">{{ err }}</li>
                        </ul>
                    </div>
                    <div class="form-group">
                        <label for="address_street">Address Street</label>
                        <input type="text" class="form-control" id="address_street"
                               placeholder="Example: iran, isfahan, ..."
                               name="address_street"
                               v-model="address_street"
                        >
                        <ul v-if="error" class="list-unstyled">
                            <li v-for="err of error.address_street" class="alert alert-danger">{{ err }}</li>
                        </ul>
                    </div>
                    <div class="form-group">
                        <label for="phone_number">Phone Number</label>
                        <input type="text" class="form-control" id="phone_number"
                               placeholder="Example: 9900723195"
                               name="phone_number"
                               v-model="phone_number"
                        >
                        <ul v-if="error" class="list-unstyled">
                            <li v-for="err of error.phone_number" class="alert alert-danger">{{ err }}</li>
                        </ul>
                    </div>

                    <div class="form-group">
                        <label for="customer_id">Select Customer</label>
                        <select class="form-control form-control-sm mb-3"
                                v-model="customer_id"
                                id="customer_id">
                            <option>Select</option>

                            <option v-for="customer of customers"
                                    :key="customer.customer_id" name="customer_id" v-bind:value="customer.customer_id">
                                {{customer.cus_name}}
                            </option>
                        </select>
                        <ul v-if="error" class="list-unstyled">
                            <li v-for="err of error.customer_id" class="alert alert-danger">{{ err }}</li>
                        </ul>
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
            pro_name: '',
            customer_id: '',
            address_number: '',
            address_street: '',
            phone_number: '',
            customers: '',
            success: ''
        }
    },
    created() {
        axios.get('http://localhost/crm-project/public/api/get/customers')
            .then((response) => {
                this.customers = response.data
            }).catch((error) => {
            console.log(error);
        })
    },
    methods: {
        add() {
            axios.post('http://localhost/crm-project/public/prospect/store', {
                pro_name: this.pro_name,
                address_number: this.address_number,
                address_street: this.address_street,
                phone_number: this.phone_number,
                customer_id: this.customer_id,
            })
                .then(data => {
                    this.$emit('insertData', data);
                    this.success = data.data.message;
                })
                .catch((error) => {
                    this.error = error.response.data.errors;
                })
            this.pro_name = '';
            this.address_number = '';
            this.address_street = '';
            this.customer_id = '';
            this.phone_number = '';
            this.error = [];
        },
        clearModal() {
            this.error = [];
            this.pro_name = '';
            this.customer_id = '';
            this.address_number = '';
            this.address_street = '';
            this.phone_number = '';
            this.success = '';

        }
    }

}
</script>
