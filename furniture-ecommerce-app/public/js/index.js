let currentIndex = 0;
const comments = [{
        text: "The best market to buy furniture",
        description: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, similique harum! Esse, velit! Quos incidunt consequuntur aliquam. Est cumque dolorem optio id mollitia accusamus natus possimus fugiat ipsam porro, quas sapiente nisi, esse eligendi incidunt veniam labore, iste nostrum fuga rerum praesentium corrupti. Rerum harum earum accusamus rem! Fugiat, quas.",
        customerName: "Amanda Z",
        job: "Housewife",
        picture: "amanda-seyfried.jpg"
    },
    {
        text: "Nice customer support",
        description: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, similique harum! Esse, velit! Quos incidunt consequuntur aliquam. Est cumque dolorem optio id mollitia accusamus natus possimus fugiat ipsam porro, quas sapiente nisi.",

        customerName: "Khabib",
        job: "Designer",
        picture: "khabib.jpeg"
    },
    {
        text: "Fast delivery",
        description: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, similique harum! Esse, velit! Quos incidunt consequuntur aliquam. Est cumque dolorem optio id mollitia accusamus natus possimus fugiat ipsam porro, quas sapiente nisi.",

        customerName: "Vladimir Putin",
        job: "Student",
        picture: "Vladimir-Putin.jpg"
    },
];

function displayComment() {
    const commentTextElement = document.getElementById("commentText");
    const commentDescriptionElement = document.getElementById("commentDescription");
    const personWhoComment = document.getElementById("customer")
    const personJob = document.getElementById("customerJob")
    const personImage = document.getElementById("customerImage")

    commentTextElement.innerText = comments[currentIndex].text;
    commentDescriptionElement.innerText = comments[currentIndex].description;

    personWhoComment.innerText = comments[currentIndex].customerName
    personJob.innerText = comments[currentIndex].job

    personImage.src = `images/${comments[currentIndex].picture}`
    
}

let index = comments.length;

function nextComment() {
    currentIndex = (currentIndex + 1) % index; // 1 mod 3, 2 mod 3, 3 mod 3 ...
    displayComment();
}

function prevComment() {
    currentIndex = (currentIndex - 1 + index) % index;
    displayComment();
}

displayComment();