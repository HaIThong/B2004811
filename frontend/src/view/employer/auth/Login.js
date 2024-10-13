import { useEffect, useState } from "react";
import { useForm } from "react-hook-form";
import { AiFillEye, AiFillEyeInvisible } from "react-icons/ai";
import { Link, useNavigate } from "react-router-dom";
import { useDispatch } from "react-redux";
import authApi from "../../../api/auth";
import { employerAuthActions } from "../../../redux/slices/employerAuthSlice";
import { toast } from "react-toastify";
import './Login.css'; // Nhập tệp CSS
import { FaEnvelope, FaLock } from "react-icons/fa"; // Nhập khẩu các icon

function Login() {
  const required_mark = <span className="text-danger"> *</span>;
  const required_error = (
    <div className="text-danger text-start small">Vui lòng nhập thông tin!</div>
  );
  const {
    register,
    formState: { errors },
    handleSubmit,
  } = useForm();
  const [isView, setIsView] = useState(false);
  const [msg, setMsg] = useState("");
  const nav = useNavigate();
  const dispatch = useDispatch();
  const [isLoading, setIsLoading] = useState(false);

  const onSubmit = async (inf) => {
    inf.role = 2;
    setIsLoading(true);
    await authApi
      .login(inf)
      .then((res) => {
        localStorage.setItem("employer_jwt", res.authorization.token);
        toast.success("Đăng nhập thành công!");    
      })
      .catch(() => {
        setMsg("Email hoặc mật khẩu không chính xác!");
      });
    setIsLoading(false);
    await authApi.getMe(2).then((res) => {
      dispatch(employerAuthActions.setUser(res));
      nav("/employer");
    });
  };

  useEffect(() => {
    if (localStorage.getItem("employer_jwt")) {
      nav("/employer");
    }
    // eslint-disable-next-line react-hooks/exhaustive-deps
  }, []);

  return (
    <>
      
      <div className="login-container">
        <form className="login-form" onSubmit={handleSubmit(onSubmit)}>
          <h4 className="login-title">Nhà tuyển dụng đăng nhập</h4>
          <div className="form-group">
            <label htmlFor="email" className="form-label">
              Email {required_mark}
            </label>
            <div className="input-group">
              <span className="input-icon">
                <FaEnvelope />
              </span>
              <input
                type="text"
                className="form-input"
                name="email"
                placeholder="Nhập email..."
                {...register("email", { required: true })}
              />
            </div>
            {errors.email && <span className="error-message">{required_error}</span>}
          </div>
          <div className="form-group">
            <label htmlFor="passwd" className="form-label">
              Password {required_mark}
            </label>
            <div className="input-group">
              <span className="input-icon">
                <FaLock />
              </span>
              <input
                type={isView ? "text" : "password"}
                className="form-input"
                name="passwd"
                placeholder="Nhập password..."
                {...register("password", { required: true })}
              />
              <span
                className="password-toggle"
                style={{ fontSize: "20px" }}
                onClick={() => setIsView(!isView)}
              >
                {isView ? <AiFillEye /> : <AiFillEyeInvisible />}
              </span>
            </div>
            {errors.password && <span className="error-message">{required_error}</span>}
          </div>
          {msg && <div className="message">{msg}</div>}
          <button type="submit" className="login-button">
            Đăng nhập
            {isLoading && <div className="loading-spinner"></div>}
          </button>
          <div className="forgot-password">
            <Link to={`#`} className="forgot-password-link">
              Quên mật khẩu
            </Link>
          </div>
          <hr />
          <div className="text-center">
            Bạn là nhà tuyển dụng mới?&nbsp;
            <Link to={`#`} className="signup-link">
              Đăng ký tài khoản
            </Link>
          </div>
        </form>
      </div>
    </>
  );
  
}

export default Login;
