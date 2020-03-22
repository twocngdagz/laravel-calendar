<template>
    <form>
        <div class="form-group">
            <label>Event Name</label>
            <input type="text" class="form-control" v-model="name">
        </div>
        <div class="form-group">
            <label>From</label>
            <date-picker class="form-control" v-model="from" :options="{ firstDay: 0 }"></date-picker>
        </div>
        <div class="form-group">
            <label>To</label>
            <date-picker class="form-control" v-model="to" :options="{ firstDay: 0 }"></date-picker>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" v-model="monday">
            <label class="form-check-label">
                Monday
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" v-model="tuesday">
            <label class="form-check-label">
                Tuesday
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" v-model="wednesday">
            <label class="form-check-label">
                Wednesday
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" v-model="thursday">
            <label class="form-check-label">
                Thursday
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" v-model="friday">
            <label class="form-check-label">
                Friday
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" v-model="saturday">
            <label class="form-check-label">
                Saturday
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" v-model="sunday">
            <label class="form-check-label">
                Sunday
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</template>

<script>
    export default {
        data() {
            return {
                monday: false,
                tuesday: false,
                wednesday: false,
                thursday: false,
                friday: false,
                saturday: false,
                sunday: false,
                name: "",
                from: "",
                to: ""
            }
        }
    }
</script>
