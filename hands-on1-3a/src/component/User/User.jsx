import './User.css';

function User({Fname, Lname}) {
    return(
        <div className="text-black">
            <h1>{Fname} {Lname}</h1>
        </div>
    )

}
export default User;