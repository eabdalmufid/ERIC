<template>

    <div class="card">
        <div class="card-header">
            <template>
                <div class="center">
                    <vs-alert color="warn">
                        <template #title>
                            Add New Admin
                        </template>
                        Admin can control between all users can share any information
                    </vs-alert>
                </div>
            </template>
        </div>
        <div class="card-body">

            <form>
                <div class="row product-page-main">
                    <div class="col-xl-6">
                        <div class="center content-inputs">
                            <vs-input
                                v-model="value1"
                                label="Admin Full Name"
                            >
                                <template #icon>
                                    <i class='bx bx-user'></i>
                                </template>
                            </vs-input>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="center content-inputs">
                            <vs-input v-model="value3" label="eric@gmail.com">
                                <template v-if="validEmail" #message-success>
                                    Email Valid
                                </template>
                                <template v-if="!validEmail && value3 !== ''" #message-danger>
                                    Email Invalid
                                </template>
                                <template #icon>
                                    <i class='bx bx-mail-send'></i>
                                </template>
                            </vs-input>
                        </div>
                    </div>
                </div>

                <div class="row product-page-main">
                    <div class="col-xl-6">
                        <div class="center content-inputs">
                            <vs-input
                                type="password"
                                v-model="value4"
                                label="Password"
                                :progress="getProgress"
                                :visiblePassword="hasVisiblePassword"
                                @click-icon="hasVisiblePassword = !hasVisiblePassword">
                                <template #message-warn>
                                    Insecure password
                                </template>
                            </vs-input>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="center content-inputs">
                            <vs-input type="password"
                                      v-model="value5"
                                      label="Re-enter Password"
                                      :progress="getProgress"
                                      :visiblePassword="hasVisiblePassword"
                                      @click-icon="hasVisiblePassword = !hasVisiblePassword">
                                <template #message-warn>
                                    Insecure password
                                </template>
                                <template #icon>
                                    <i class='bx bx-lock-open-alt'></i>
                                </template>
                            </vs-input>
                        </div>
                    </div>
                </div>

                <div class="form-group row has-error">
                        <label class="col-sm-2 col-form-label">Upload Avatar</label>
                        <div class="col-sm-10">

                            <vueDropzone ref="dropzone" :useCustomSlot=true class="dropzone digits dz-clickable" id="drop1" :options="dropOptions" :include-styling="false">
                                <div class="dz-message needsclick"><i class="fa fa-upload"></i>
                                    <h6>Drop file here or click to upload.</h6><span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                                </div>
                            </vueDropzone>

                            <div class="card-body megaoptions-border-space-sm">
                                <form class="mega-inline">
                                    <div class="row">

                                        <div class="col-sm-6">
                                            <div class="card">
                                                <div class="media p-20">
                                                    <div class="radio radio-primary mr-3">
                                                        <input id="radio14" type="radio" name="radio1" value="option1" data-original-title="" title="">
                                                        <label for="radio14"></label>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mt-0 mega-title-badge">Private<span class="badge badge-primary pull-right digits">50 INR</span></h6>
                                                        <p>Estimated 1 Day Shipping ( Duties end tax may be due delivery )</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="card">
                                                <div class="media p-20">
                                                    <div class="radio radio-success mr-3">
                                                        <input id="radio13" type="radio" name="radio1" value="option1" data-original-title="" title="">
                                                        <label for="radio13"></label>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mt-0 mega-title-badge">Public<span class="badge badge-success pull-right digits">100 INR</span></h6>
                                                        <p>Estimated 1 Day Shipping ( Duties end tax may be due delivery )</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                                <br>
                                <form class="mega-inline">
                                    <div class="row">

                                        <div class="col-sm-6">
                                            <div class="card">
                                                <div class="media p-20">
                                                    <div class="radio radio-danger mr-3">
                                                        <input id="radio12" type="radio" name="radio1" value="option1" data-original-title="" title="">
                                                        <label for="radio12"></label>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mt-0 mega-title-badge">Read only<span class="badge badge-danger pull-right digits">100 INR</span></h6>
                                                        <p>Estimated 1 Day Shipping ( Duties end tax may be due delivery )</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <div class="media p-20">
                                                    <div class="radio radio-secondary mr-3">
                                                        <input id="radio11" type="radio" name="radio1" value="option1" data-original-title="" title="">
                                                        <label for="radio11"></label>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mt-0 mega-title-badge">Share Now<span class="badge badge-secondary pull-right digits">100 INR</span></h6>
                                                        <p>Estimated 1 Day Shipping ( Duties end tax may be due delivery )</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <vs-button
                                size="large"
                                color="success"
                                circle
                            >
                                Save
                            </vs-button>

                        </div>
                    </div>

            </form>
        </div>
    </div>

</template>

<script>
export default {
    name: "New",
    data: () => ({
        dropOptions: {
            url: "https://httpbin.org/post",
            maxFilesize: 2, // MB
            maxFiles: 4,
            chunking: true,
            chunkSize: 500, // Bytes
            thumbnailWidth: 70, // px
            thumbnailHeight: 70,
            addRemoveLinks: true,
        },
        value1:"",
        value2:"",
        value3:"",
        value4:"",
        value5:"",
        hasVisiblePassword: false
    }),
    methods: {
        removeAllFiles() {
            this.$refs.dropzone.removeAllFiles();
        }
    },
    mounted() {
        //todo:run any js can mounted
    },
    computed:{
        validEmail() {
            return /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(this.value3)
        },
        getProgress() {
            let progress = 0

            // at least one number

            if (/\d/.test(this.value)) {
                progress += 20
            }

            // at least one capital letter

            if (/(.*[A-Z].*)/.test(this.value)) {
                progress += 20
            }

            // at menons a lowercase

            if (/(.*[a-z].*)/.test(this.value)) {
                progress += 20
            }

            // more than 5 digits

            if (this.value.length >= 6) {
                progress += 20
            }

            // at least one special character

            if (/[^A-Za-z0-9]/.test(this.value)) {
                progress += 20
            }

            return progress
        }
    }
}

</script>

<style scoped>

</style>
