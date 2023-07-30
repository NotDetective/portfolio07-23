const calAge = (birthDay, birthMonth, birthYear) => {
    let ageCal = 0

    const date = new Date()
    let month = date.getMonth() + 1
    let year = date.getFullYear()
    let day = date.getDate()

    if (month > 3 || (month == birthMonth && day >= birthDay)) {
        ageCal = year - birthYear;
      } else {
        ageCal = year - birthYear - 1;
      }

    console.log(ageCal)
    // changeAge(ageCal)
}

const changeAge = (ageInYears) => {
    const ageElement = document.querySelector('#age')
    ageElement.innerHTML = ageInYears
}

calAge(3,9,2006)


