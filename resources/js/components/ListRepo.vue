<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header"> <ul v-for="repo in myGitHubData">
                        {{ repo.name}}
                        </ul></div>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                myGitHubData: {}
            }
        },
        mounted:function () {
            this.GitHubAPI.get('/user/repos', {}, (response)=>{
               this.myGitHubData= response.body
                console.log(response.body)
            } )

        }


    }
</script>
