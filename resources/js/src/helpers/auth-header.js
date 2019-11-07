// Auth header sẽ được dùng để tạo request HTTP đã được xác thực đến server api
// sử dụng xác thực JWT.

export function authHeader() {
  let user = JSON.parse(localStorage.getItem('user'));

  if (user && user.token) {
    return {'Authorization': 'Bearer ' + user.token};
  }
  else {
    return {};
  }
}
