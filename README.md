
<h3 align="center">
  
  <p align="center"><img src="https://img.shields.io/badge/WLCM%20TO -NAYAN SERVER-green?colorA=%23ff0000&colorB=%23017e40&style=flat-square">  
  
</h3>

## Instalation :
```bash
> npm i nayan-server
```

#### Available Api

```
- gpt
- spotify
- img2text
- pintarest
```

<h3 align="center">
  
  <p align="center"><img src="https://img.shields.io/badge/WLCM%20TO -MORE API COMING SOON-green?colorA=%23ff0000&colorB=%23017e40&style=flat-square">  
  
</h3>

## Usage GPT

```javascript
// import { gpt } from "gpti";
const { gpt } = require("nayan-server");

gpt({
    messages: [
        {
            role: "assistant",
            content: "Hello! How are you today?"
        },
        {
            role: "user",
            content: "Hello, my name is Nayan."//your name
        },
        {
            role: "assitant",
            content: "Hello, Nayan! How are you today?"
        }
    ],
    prompt: "Can you repeat my name?",
    model: "GPT-4",
    markdown: false
}, (err, data) => {
    if(err != null){
        console.log(err);
    } else {
        console.log(data);
    }
});
```

## Usage Spotify

```javascript

const { spotify } = require("nayan-server");

const name = "ghum" //song name

spotify(name).then(data => {
  console.log(data)
 
});
```


## Usage Pintarest
```javascript
const { pintarest } = require("nayan-server");

const search = "Neymar pic"

pintarest(search).then(data => {
  console.log(data)
 
});
```


## Usage img2text
```javascript
const { img2text } = require("nayan-server");

const link = "https://i.imgur.com/2TTyRTo.jpeg" //photo direct link

img2text(link).then(data => {
  console.log(data)
 
});
```
