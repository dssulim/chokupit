export default

function getFirstWeekday(month, year) {
    return new Date(year, month, 1).getUTCDay()
}
