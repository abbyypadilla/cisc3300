console.log("in-class-4.js loaded!");

const num = [1, 2, 3, 4, 5];

for (let i = 0; i < num.length; i++) 
{
    if (num[i] % 2 === 0) 
    {
        console.log(`${i} is even!`);
    } else 
    {
        console.log(`${i} is odd!`);
    }
}
