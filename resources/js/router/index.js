import {createRouter, createWebHistory } from 'vue-router';
import  CustomerIndex from '../components/CustomerIndex.vue';
import CustomerClient from '../components/CustomerClient.vue';
const routes = [ 
   {
      path : '/dashboard',
      name: 'customers.index',
      component: CustomerIndex
   },
   {
      path : '/customers/create',
      name: 'customers.create',
      component: CustomerClient
   }
];

export default createRouter({
  history: createWebHistory(),
  routes
})