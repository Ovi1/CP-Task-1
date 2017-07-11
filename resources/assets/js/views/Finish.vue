<template>
    <div class="finished">
        <form class="form-horizontal" role="form" v-if="!url" @submit.prevent="finish"
              @keydown="form.errors.clear($event.target.name)">
            <div class="form-group">
                <legend>Testą atliko:</legend>
            </div>
            <input type="hidden" name="surveys_id" v-model="form.surveys_id = $route.params.id">
            <div class="form-group">
                <input type="text" class="form-control" name="name" id="name" placeholder="Vardas" v-model="form.name">
                <p class="help-block" v-if="form.errors.has('name')" v-text="form.errors.get('name')"></p>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="surname" id="surname" placeholder="Pavardė"
                       v-model="form.surname" v-on:keyDown="clearError()">
                <p class="help-block" v-if="form.errors.has('surname')" v-text="form.errors.get('surname')"></p>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" :disabled="form.errors.any()">Pateikti</button>
            </div>
        </form>
        <div v-if="url" class="row">
            <h1>Saugokite nuoradą, jei norėsite pažiūrėti rezultatus dar kartą.</h1>
            <router-link v-if="url" :to="{path: this.$route.params.id + '/results/' + url}" class="btn btn-block btn-primary btn-lg">Jūsų rezultatai</router-link>
        </div>
    </div>
</template>
<script>
    export default {
        props: ['answers'],
        data() {
            return {
                form: new Form({
                    surveys_id: '',
                    url: null,
                    name: '',
                    surname: '',
                    answers: [this.answers]
                }),

                url: null
            }
        },
        created() {
        },
        methods: {
            finish() {
                this.form.post(this.$route.fullPath + '/finish').then(url => this.url = url)
            },
        },
    }
</script>