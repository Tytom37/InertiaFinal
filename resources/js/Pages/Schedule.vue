<script setup>
import Mylayout from '@/Layouts/MyLayout.vue';
import { Link, Head } from '@inertiajs/vue3';
import { Inertia } from '@inertiajs/inertia';
import { defineProps } from 'vue';

const props = defineProps ({
    events: Array
})

defineOptions({
    layout: Mylayout
});

</script>

<template>
    <div class="py-12 welcome">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="backgroundimg">
                    <div class="text">
                        <h1>Schedules</h1>
                    </div>
                </div>
                <div class="outer-container">
                    <div class="container">
                        <div class="contents" v-for="event in events" :key="event.id">
                            <div class="box1">
                                <h1>{{ event.name }}</h1><br>
                                <h2>Venue: {{ event.venue }}</h2><br>
                                <h4>Address: {{ event.place }}</h4>
                            </div>
                            <table>
                                <tr>
                                    <th>Start of Event</th>
                                    <th>End of Event</th>
                                </tr>
                                <tr>
                                    <td>{{ event.timestart }}</td>
                                    <td>{{ event.timeend }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 50%;
}
  
td, th {
    border: 1px solid #dddddd;
    text-align: left;
    text-align: center;
    padding: 8px;
}
  
td {
    background-color: lightgray;
}
  
th {
    background-color: rgb(203, 240, 203);
}
  
.contents:nth-child(odd) {
    background-color: lightyellow;
}
  
.contents:nth-child(even) {
    background-color: lightsalmon;
}
  
.box1 h1 {
    font-size: 40px;
    font-weight: bold;
}
  
.box1 h2 {
    font-size: 20px;
    font-weight: bold;
}
  
.outer-container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}
  
.container {
    padding: 100px;
}
  
.backgroundimg {
    height: 428px;
    background-image: url('../Components/schedulebck.avif');
    background-position: center;
    background-repeat: no-repeat;
}
  
.text {
    text-shadow: 3px 3px 2px rgb(255, 165, 0);
    color: white;
    padding: 100px;
    font-size: 50px;
}
  
.contents {
    border-radius: 20px;
    padding: 50px;
    margin-bottom: 20px;
    box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
    display: flex;
    justify-content: space-between;
}
  
.box1 {
    padding: 10px;
    display: flex;
    flex-direction: column;
}

</style>