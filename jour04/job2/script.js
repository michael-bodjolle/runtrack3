var jsoninfo = '{"name":"La Plateforme", "address": "8 rue d hozier", "city": "Marseille", "nb_staff": "11", "creation":"2019"}';
function jsonValueKey(string, key) {

    let info = JSON.parse(jsoninfo);
    console.log(info);
    return info[key]
}
console.log(jsonValueKey(jsoninfo, 'city'))

