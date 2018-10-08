<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header"><p>Repositories grabbed: {{ repositoriesCount }}</p></div>

                    <!--<div class="card-body">-->
                    <!--List Of your Repos:-->

                    <!--</div>-->
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
            this.GitHubAPI.get('/user/repos', {}, [this.myGitHubData, 'repositories'])
                .then(function (data) {
                    console.log(data)
                })
        },
        computed:{
            repositoriesCount: function () {
                if (this.myGitHubData.repositories) {
                    return this.myGitHubData.repositories.length
                }
                return 'none yet...'
            }
        }

    }
</script>
