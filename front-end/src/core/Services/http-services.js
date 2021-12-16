import axios from 'axios';
export const HTTP = axios.create({
    withCredentials:true,
   

    baseURL: "http://localhost:8000/",
   
});