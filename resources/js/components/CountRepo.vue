<template>
    <div class="col-md-4">
        There are Repositories:{{ repositoriesCount }}
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
