const calAge = () => {

    let ageCal = 0

    const date = new Date()

    let month= date.getMonth()+1

    let year= date.getFullYear()

    let day= date.getDate()

    if(month == 3 && day >= 9){

        ageCal = year - 2006

    }else if (month >= 4) {
    
        ageCal = year - 2006

    }else {
        ageCal = year - 2006 - 1
    }
    changeAge(ageCal)
}

const changeAge = (ageInYears) => {
    const ageElement = document.querySelector('#age')
    ageElement.innerHTML = ageInYears
}

calAge()


