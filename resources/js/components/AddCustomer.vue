<template>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">


                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Customer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" @click="clearModal">
                        <span aria-hidden="true" >&times;</span>
                    </button>
                </div>
                <div v-if="message.length>0">
                    <p class="alert alert-success" v-if="message == 'new customer created'" >{{ message }}</p>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="cus_name">Name</label>
                        <input type="text" class="form-control" id="cus_name"
                               placeholder="Example: ali"
                               name="cus_name"
                               v-model="cus_name"
                        >
                        <ul v-if="error" class="list-unstyled">
                            <li v-for="err of error.cus_name" class="alert alert-danger">{{ err }}</li>
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
                            <li v-for="err of error.address_number" class="alert alert-danger">{{ err }}</li>
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
            cus_name: '',
            address_number: '',
            address_street: '',
            phone_number: '',
            message: ''
        }
    },
    methods: {
        add() {
            axios.post('http://localhost/crm-project/public/customer/store', {
                cus_name: this.cus_name,
                address_number: this.address_number,
                address_street: this.address_street,
                phone_number: this.phone_number,
            })
                .then(data => {
                    this.$emit('insertData', data);
                    this.message = data.data.message;
                })
                .catch((error) => {
                    this.error = error.response.data.errors;
                })
            this.cus_name = '';
            this.address_number = '';
            this.address_street = '';
            this.phone_number = '';
            this.error = [];
        },
        clearModal() {
            this.error = [];
            this.cus_name = '';
            this.address_number = '';
            this.address_street = '';
            this.phone_number = '';
            this.message = '';

        }
    }


}
</script>
