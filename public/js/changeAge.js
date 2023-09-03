const calAge = (birthDay, birthMonth, birthYear) => {
    let ageCal = 0

    const date = new Date()
    let month = date.getMonth() + 1
    let year = date.getFullYear()
    let day = date.getDate()

    let afterMonth = month > birthMonth;
    let isMonth= month === birthMonth;
    let afterDay = day >= birthDay;
    if (afterMonth || isMonth && afterDay) {
        ageCal = year - birthYear;
    } else {
        ageCal = year - birthYear - 1;
    }

    changeAge(ageCal)
}

const changeAge = (ageInYears) => {
    const ageElement = document.querySelector('#age')
    ageElement.innerHTML = ageInYears
}

calAge(9, 3, 2006)


