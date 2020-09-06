import {createContainer} from './createContainer.js';

fetch('/api/get.php')
    .then(res => res.json())
    .then(data => createContainer(data)
    );


