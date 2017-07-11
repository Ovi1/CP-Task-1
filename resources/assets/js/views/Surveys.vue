<template>
    <div class="surveys">
        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-4" v-for="survey in surveys">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">{{survey.type | uppercase}}</h3>
                </div>
                <div class="panel-body">
                    <router-link :to="{path: '/survey/' + survey.id}" class="btn btn-default" style="display: block">
                        Pradėti
                    </router-link>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data()
        {
            return {
                surveys: [],
            }
        },
        created()
        {
            axios.get('surveys/').then(response => this.surveys = response.data);
        },
        filters: {
            uppercase: function (v) {
                return v.toUpperCase();
            },
        }
    }
</script>
