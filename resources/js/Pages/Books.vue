<script setup>
import Mylayout from '@/Layouts/MyLayout.vue';
import { Inertia } from '@inertiajs/inertia';
import { defineProps } from 'vue';
import { ref } from 'vue';
import { Link } from "@inertiajs/vue3";
import { useForm } from '@inertiajs/vue3';

defineOptions({
    layout: Mylayout
});

const props = defineProps({
  bookings: Array
});

const form = useForm({
  name: '',
  contact: '',
  event_id: ''
});

async function deleteBooking(booking) {
  const del = confirm("Are you sure you want to delete?");
  if (del) {
    try {
      await form.delete(`/bookings/${booking.id}`, {
        preserveScroll: true
      });
    } catch (error) {
      console.error("Failed to delete booking:", error);
    }
  }
}
</script>

<template>
  <div class="py-12 welcome">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="backgroundimg">
          <div class="text">
            <h1>Bookings</h1>
          </div>
        </div>
        <div class="outer-container">
          <div class="container">
            <div class="small-container" v-for="booking in bookings" :key="booking.id">
              <div class="infos">
                <div class="una">
                  <h1>Name: {{ booking.name }}</h1>
                  <h1>Contact: {{ booking.contact }}</h1>
                  <h1>Event: {{ booking.event.name }}</h1>
                  <h1>Start: {{ booking.event.timestart }}</h1>
                  <h1>End: {{ booking.event.timeend }}</h1>
                </div>
                <div class="duha">
                  <Link :href="'/booking/' + booking.id + '/edit'" class="edit-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-6 h-6" fill="green">
                      <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"/>
                    </svg>
                  </Link>
                  <button class="delete-btn" @click="deleteBooking(booking)">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
.infos {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 100%;
}

.text {
  text-shadow: 3px 3px 2px rgb(255, 165, 0);
  color: white;
  padding: 100px;
  font-size: 50px;
}

.backgroundimg {
  background-image: url('../Components/booksbck.avif');
  height: 428px;
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
}

.outer-container {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.container {
  display: grid;
  grid-template-columns: repeat(3, minmax(200px, 1fr));
  gap: 20px;
  padding: 20px;
}

.small-container {
  position: relative;
  box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
  background-color: blanchedalmond;
  display: flex;
  flex-direction: column;
  gap: 10px;
  align-items: flex-start;
  border-radius: 10px;
  padding: 10px;
}

.edit-btn {
  background-color: transparent;
  border: none;
  cursor: pointer;
}

.delete-btn {
  background-color: transparent;
  color: red;
  font-weight: bold;
  border: none;
  cursor: pointer;
  margin-left: 10px;
}

.duha {
  display: flex;
  align-items: center;
  gap: 10px;
}
</style>
