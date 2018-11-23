<template>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-7">
                                <form role="form">
                                    <div class="form-group">
                                        
                                        <label for="exampleInputName">
                                            Name
                                        </label>
                                        <input type="text" class="form-control" id="exampleInputName">
                                    </div>
                                    <div class="form-group">
                                        
                                        <label for="exampleInputDescription">
                                            Description
                                        </label>
                                        <input type="text" class="form-control" id="exampleInputDescription">
                                    </div>
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </form>
                                </div>
                        <div class="col-md-3">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-8">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>
                                            #
                                        </th>
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Description
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            TB - Monthly
                                        </td>
                                        <td>
                                            01/04/2012
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                        <div class="col-md-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
