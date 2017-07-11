<template>
    <div class="results">
        <div class="panel panel-primary">
            <div class="panel-heading">
                    <h3>{{surveys_results.name}} {{ surveys_results.surname }} - rezultatai</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive" v-if="surveys_results">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Klausimas</th>
                            <th>Atsakymas (-ai)</th>
                            <th>Ats. taškai</th>
                            <th>Jūsų atsakymas (-ai)</th>
                            <th>Atsakyta teisingai</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="(result, index) in surveys_results.survey_data" :index="index">
                            <td>{{++index}}.</td>
                            <td>{{ result[0].title}}</td>
                            <td>{{ result[0].answer}}</td>
                            <td>{{ result[0].point }}</td>
                            <td>
                                <span v-for="answer in result.survey_answers">{{answer}}<br></span>
                            </td>
                            <td>{{result.answer_correct | filterCorrect }}</td>
                        </tr>
                        <tr align="right">
                            <td colspan="6">Surinktą taškų: {{surveys_results.total_points}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {

        data() {
            return {
                surveys_results: [],
                counter: 0,
                total: 0,
            }
        },

        mounted() {
            this.getData(this.$route.fullPath);
        },
        methods: {
            getData: function (url) {
                axios.get(url).then(response => this.surveys_results = response.data);
            },
        },
        filters: {
            filterCorrect: function (v) {
                if (v) {
                    return 'Taip'
                } else {
                    return 'Ne'
                }
            }
        }
    }
</script>