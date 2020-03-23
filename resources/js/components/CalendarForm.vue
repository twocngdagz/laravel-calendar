<template>
    <form>
        <div class="form-group">
            <label>Event Name</label>
            <input type="text" class="form-control" v-model="form.title">
        </div>
        <div class="form-group">
            <label>From</label>
            <date-picker class="form-control" v-model="form.from" :options="{ firstDay: 0 }"></date-picker>
        </div>
        <div class="form-group">
            <label>To</label>
            <date-picker class="form-control" v-model="form.to" :options="{ firstDay: 0 }"></date-picker>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" v-model="form.Sunday">
            <label class="form-check-label">
                Sunday
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" v-model="form.Monday">
            <label class="form-check-label">
                Monday
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" v-model="form.Tuesday">
            <label class="form-check-label">
                Tuesday
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" v-model="form.Wednesday">
            <label class="form-check-label">
                Wednesday
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" v-model="form.Thursday">
            <label class="form-check-label">
                Thursday
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" v-model="form.Friday">
            <label class="form-check-label">
                Friday
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" v-model="form.Saturday">
            <label class="form-check-label">
                Saturday
            </label>
        </div>
        <button type="submit" class="btn btn-primary" @click.prevent="submit">Submit</button>
    </form>
</template>

<script>
    import axios from 'axios'
    export default {
        data() {
            return {
                form: {
                    Monday: false,
                    Tuesday: false,
                    Wednesday: false,
                    Thursday: false,
                    Friday: false,
                    Saturday: false,
                    Sunday: false,
                    title: "",
                    from: "",
                    to: ""
                }
            }
        },
        methods: {
            submit() {
                axios.post('/api/events', this.form)
                .then(response => {
                    this.$emit('refresh')
                })
            }
        }
    }
</script>
