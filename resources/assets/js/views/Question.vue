<template>
    <div class="col-md-12">
        <form class="form-horizontal" v-if="!finished">
            <div class="question" v-for="(question, index) in questions.data" :index="index" :key="question.id">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">{{counter + 1}}. {{question.title}}</h4>
                    </div>
                    <div class="panel-body">
                        <transition name="fade">
                            <answers ref="qanswers" v-on:selected="onSelected" :question_id="question.id" :items="question.answers"></answers>
                        </transition>
                    </div>
                </div>
            </div>
            <hr>
            <div class="btn-group">
                <button class="btn btn-primary" :disabled="!selected"
                        @click.prevent="loadNext(questions.next_page_url)">Kitas
                </button>
            </div>
        </form>
        <finish v-if="finished" :answers="answers"></finish>
    </div>
</template>

<script>

    const finish = require('../views/Finish.vue');
    const answers = require('../views/Answers.vue');

    export default {
        data() {
            return {
                questions: [
                    {
                        title: '',
                        id: '',
                    }
                ],
                counter: 0,
                answers: [],
                finished: false,
                selected: false,
            }
        },

        components: {
            finish,
            answers
        },
        mounted() {
            this.getData(this.$route.fullPath + '?page=1');
        },
        methods: {
            getData: function (url) {
                axios.get(url).then(response => this.questions = response.data);
            },

            onSelected: function () {
                this.selected = true;
            },

            loadNext: function (url) {
                this.selected = false;
                this.counter++;
                this.answers.push(this.$refs.qanswers[0].checkedAnswers);
                if (url) {
//                    @TODO Vue stucks on rendering some time next question... sometimes helps to clear prev data this.questions = [];
                    axios.get(url).then(response => this.questions = response.data);
                } else {
                    this.selected = false;
                    this.finished = true;
                }
            },
        },
        events: {},

        filters: {
            uppercase: function (v) {
                return v.toUpperCase();
            },
        }
    }
</script>