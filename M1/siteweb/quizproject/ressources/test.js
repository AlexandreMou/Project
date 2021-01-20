let n = 0

function numberFormat(n){
    return n.toString().padStart(2,'0')
}

function render() {
    const items = [
        'tache 1',
        'tache 1',
        'tache 1',
    ]

    const lis = items.map((item,k) => <li key={k}>{item}</li>)

    const title = <div> <h1 id="title" className="title">
            Bonjour tout le monde<span>{n}</span>
        </h1>
        <ul>
        {items.map((item,k) => <li key={k}>{item}</li>)}
        </ul>
    </div>
    ReactDOM.render(title,document.getElementById('app'))

}

render()

window.setInterval(()=>{
    n++
    render()
},1000)