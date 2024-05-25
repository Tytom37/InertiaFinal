<script setup>
import { defineProps, ref } from 'vue';
import { useForm } from '@inertiajs/vue3';
import Mylayout from '@/Layouts/MyLayout.vue';

const props = defineProps({
  booking: {
    type: Object,
    required: true
  },
  events: {
    type: Array,
    required: true
  }
});

const form = useForm({
  name: props.booking.name,
  contact: props.booking.contact,
  event_id: props.booking.event_id
});

const submitForm = async () => {
  await form.put(`/booking/${props.booking.id}`);
};

const goBack = () => {
  window.history.back();
};

defineOptions({
  layout: Mylayout,
});
</script>

<template>
    <div class="p-8">
        <h1 class="text-4xl my-3 text-amber-400 flex-1 m-2">Edit Bookings</h1>
        <div class="border p-4 rounded w-2/4 m-4">
        <form @submit.prevent="submitForm">
            <table>
            <tr>
                <th class="text-left">Name:</th>
                <td class="px-4">
                <input class="w-full rounded-md py-2 px-3 focus:outline-none shadow-none focus:border-amber-700" v-model="form.name" type="text">
                </td>
            </tr>
            <tr>
                <th class="text-left">Contact:</th>
                <td class="px-4">
                <input class="w-full rounded-md py-2 px-3 focus:outline-none shadow-none focus:border-amber-700" v-model="form.contact" type="text">
                </td>
            </tr>
            <tr>
                <th class="text-left">Event Name:</th>
                <td class="px-4">
                <select class="w-full rounded-md py-2 px-3 focus:outline-none shadow-none focus:border-amber-700" v-model="form.event_id">
                    <option v-for="event in props.events" :key="event.id" :value="event.id">{{ event.name }}</option>
                </select>
                </td>
            </tr>
            </table>
            <div class="text-right">
            <button type="button" @click="goBack" class="btn text-white bold bg-amber-500 hover:bg-amber-400">Back</button>
            <button type="submit" class="btn ml-2 text-white bg-amber-500 hover:bg-amber-400">Save</button>
            </div>
        </form>
        </div>
    </div>
</template>