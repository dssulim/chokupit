export default
    function noteDays(arr) {
      let note = [];
      const orr = Object.entries(arr)
      orr.forEach(([key, value]) => {
      note.push(value)
    })
        return note
    }