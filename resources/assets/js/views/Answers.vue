<template>
    <div class="form-group">
        <div class="checkbox-inline" v-for="(item, index) in items" :index="index" :key="item.id">
            <label>
                <input type="checkbox" v-bind:id="'answer-'+ item.id" v-bind:value="item.answer" v-model="checkedAnswers.answers" @click="onSelectedAnswer">{{item.answer}}
            </label>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            'question_id': '',
            'items': {},
        },
        data() {
            return {
                checkedAnswers: {
                    'answers': [],
                    'qid': this.question_id
                }
            }
        },
        created() {

        },

        methods: {
            onSelectedAnswer: function () {
                this.$emit('selected');
            },
        }
    }
</script>