function pow(x, n) {
    let res = x;
    for(let i = 1; i < n; i++) {
        res *= x;
    }
    return res;
}
x = 2;
let n = 3;
document.getElementsByClassName('powx')[0].innerText = x;
document.getElementsByClassName('pown')[0].innerText = n;
document.getElementsByClassName('powResult')[0].innerText = pow(x, n);


function gcd(a, b) {
    if (b === 0 ) return a;
    return gcd(b, a%b);
}
let a = 56;
let b = 36;
document.getElementById('gcda').innerText = a;
document.getElementById('gcdb').innerText = b;
document.getElementById('gcdResult').innerText = gcd(a, b);


function minDigit(x) {
    return Math.min(...(("" + x).split('').map((e) => +e)));
}
x = 1526;
document.querySelector('.minDigitx').innerText = x;
document.querySelector('.minDigitResult').innerText = minDigit(x);


function pluralizeRecords(n) {
    if (n % 100 === 11 || n % 100 === 12 || n % 100 === 13 || n % 100 === 14) return `В результате выполнения запроса было найдено ${n} записей`;
    else if(n % 10 === 1) return `В результате выполнения запроса была найдена ${n} запись`;
    else if(n % 10 === 2 || n % 10 === 3 || n % 10 === 4) return `В результате выполнения запроса были найдены ${n} записи`;
    return `В результате выполнения запроса было найдено ${n} записей`;
}
n = 21;
document.querySelector('.pluralizeRecordsn').innerText = n;
document.querySelector('.pluralizeRecordsResult').innerText = pluralizeRecords(n);


function fibb(n) {
    if (n === 0) return 0;
    if (n === 1 || n === 2) return 1;
    let n1 = 1;
    let n2 = 1;
    let t = 0;
    for (let i = 2; i < n; i++) {
        t = n2;
        n2 = n1 + n2;
        n1 = t;
    }
    return n2;
}
n = 73;
document.querySelector('.fibbn').innerText = n;
document.querySelector('.fibbResult').innerText = fibb(n);