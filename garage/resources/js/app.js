import './bootstrap';
import axios from 'axios';

const mainContent = document.querySelector('.--content');

if (mainContent) {
    const mainForm = mainContent.querySelector('form');
    mainContent.querySelectorAll('select').forEach(s => s.addEventListener('change', () => mainForm.submit()));
}

const breakdown = document.querySelector('#breakdown');
const trucksList = breakdown.querySelector('#trucks-list');
const mechanicId = breakdown.querySelector('[name=mechanic_id]');
const submitButton = breakdown.querySelector('[data-submit]');
if (breakdown) {
    mechanicId.addEventListener('change', () => {
        if (mechanicId.value === '0') {
            trucksList.innerHTML = '';
        } else {
            axios.get(breakdownUrl + '/trucks-list/' + mechanicId.value)
                .then(res => {
                    trucksList.innerHTML = res.data.html;
                })

            }
        });
        submitButton.addEventListener('click', () => {
            const data = {};
            breakdown.querySelectorAll('[data-create]')
            .forEach(i => {
                data[i.getAttribute('name')] = i.value;
            });
            axios.post(breakdownUrl + '/create', data)
            .then(res => {
                console.log(res.data);
            })
            .catch(error => { console.log('all bad') });
        });
        window.addEventListener('load',()=>{
            getList();
        });
    }
    const getList = () =>{
        const breakdownList = document.querySelector('#breakdowns-list');
        axios.get(breakdownUrl+'/list')
        .then(res =>{
            breakdownList.innerHTML = res.data.html;
        })
    }
