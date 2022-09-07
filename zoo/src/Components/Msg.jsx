function Msg({msg}){
    if (msg==null){
        return null;
    }
    return(
        <div className="msg-bin">
            <div className="msg">
                {msg}
            </div>
        </div>
    )
}
export default Msg;