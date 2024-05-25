<script setup>
import Mylayout from '@/Layouts/MyLayout.vue';
import { Link, Head } from '@inertiajs/vue3';
import { Inertia } from '@inertiajs/inertia';
import { useForm } from '@inertiajs/vue3';
import { defineProps } from 'vue';

defineOptions({
    layout: Mylayout
});

const props = defineProps({
    events: {
        type: Array,
        required: true,
    }
});

const form = useForm({
  name: '',
  contact: '',
  event_id: ''
});

const submitForm = () => {
    form.submit('post', '/booking');
};
</script>

<template>
    <div class="py-12 welcome">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="backimg">
                    <div class="content">
                        <div>
                            <h3>Discover Every Event, Seamlessly with EventEx</h3>
                            <h1>You envision it. We bring it to life.</h1>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <form @submit.prevent="submitForm">
                        <div class="form-group">
                            <label for="name">Name </label>
                            <input type="text" id="name" v-model="form.name">
                        </div>
                        <div class="form-group">
                            <label for="contact">Contact Number </label>
                            <input type="text" id="contact" v-model="form.contact">
                        </div>
                        <div class="form-group">
                            <label for="event_id">Choose Event</label>
                            <select id="event_id" v-model="form.event_id">
                                <option v-for="event in events" :key="event.id" :value="event.id">{{ event.name }}</option>
                            </select>
                        </div>
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>

.content div {
    margin-top: -50px;
}

button {
    background-color: rgb(178, 233, 178);
    padding: 15px 25px 15px 25px;
    border-radius: 10px;
    transform: translate(0, -30%);
}

.box {
    display: flex;
    padding: 10px;
    width: 33%;
    flex-direction: column;
    justify-content: center;
    transform: translate(5%, -40%);
}

input, select {
    border: 0;
    border-bottom: 1px solid black;
}

input:focus, input:active, select:focus, select:active {
    outline: none;
    box-shadow: none;
    border-bottom: 1px solid black;
}

select {
    width: 197px;
}

.form-group {
    background-color: white;
    gap: 15px;
    align-items: center;
    justify-content: space-between;
    display: flex;
    margin: 10px 10px;
    border-radius: 10px;
    padding: 10px;
}

form > button {
    align-self: flex-end;
    margin-left: 10px;
    margin-top: 30px;
}

h3 {
    font-size: 15px;
    font-weight: bold;
}

h1 {
    font-size: 50px;
    font-weight: bold;
}

.backimg {
    background-image: url('../Components/bookbck.avif');
    height: 500px;
    margin-bottom: -300px;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
}

.content {
    text-shadow: 3px 3px 2px rgb(85, 67, 34);
    transform: translate(90%, 100%);
    padding: 50px;
    width: 50%;
    color: white;
    text-align: center;
}
</style>