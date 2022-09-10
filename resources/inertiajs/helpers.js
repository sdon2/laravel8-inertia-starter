const roundOff = (amount) => {
    amount = parseFloat(amount);
    if (isNaN(amount)) return { value: amount, rounded: 0.00, symbol: '' };

    var value = amount.toFixed(2);
    var rounded = parseFloat('0.' + value.substr(value.indexOf('.') + 1));
    if (rounded === 0) {
        return { value: amount, rounded: 0.00, symbol: '' };
    }

    value = value.substr(0, value.indexOf('.'));
    if (rounded < 0.5) {
        return { value: parseFloat(value), rounded: (rounded * -1.00), symbol: '-' };
    } else {
        rounded = parseFloat((1 - rounded).toFixed(2));
        return { value: parseFloat(value) + 1.00, rounded, symbol: '+' };
    }
};

const fetchData = async function (url, vm, destination) {
    var response = await axios.get(url);
    vm[destination] = response.data;
};

const unslug = function (slug, captialize) {
    let result = slug.replace(/[_]/g, ' ');

    if (!captialize) {
        return result;
    }

    let words = result.split(' ');
    let captialized_words = [];

    words.forEach(word => {
        captialized_words.push(word[0].toUpperCase() + word.slice(1, word.length));
    });

    return captialized_words.join(' ');
};

export { roundOff, fetchData, unslug };
