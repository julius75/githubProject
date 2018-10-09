<template>
    <div class="col-md-4">
        <div class="card text-white border-0">
            <div class="card-header bg-info">
                You have Repositories:{{ repositoriesCount }}
            </div>


            <div class="card-body bg-info">

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
