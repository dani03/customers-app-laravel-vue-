import {ref} from "vue";
import axios from "axios";

export default function useCustomers(){
  
  const customers = ref([]);

  const getCustomers = async () => {
        let response = await axios.get('/api/customers');
        customers.value = response.data.data;
  };
  const createCustomers = async (data) => {
         await axios.post('/api/customers', data);
        // customers.value = response.data.data;
  };

  return {

    customers,
    getCustomers,
    createCustomers
  }
}