import axios from 'axios';

const api = axios.create({
    baseURL: 'http://127.0.0.1:8000'
})

export const carApi = {
    getCarById: (id) => api.get(`/cars/${id}`),
    deleteCarById: (id) => api.delete(`/cars/delete/${id}`),
    updateCarById: (item) => api.put('/cars/update',item),
    getAllCars: () => api.get('/cars'),
    addCar:(item) => api.post('/addCar',item),

}