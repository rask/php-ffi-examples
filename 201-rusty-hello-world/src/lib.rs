use std::os::raw::c_char;
use std::ffi::CString;

pub const FFI_LIB: &str = "libmy_library.so";

fn get_hello_world() -> String {
    return String::from("Hello world!");
}

#[no_mangle]
pub extern "C" fn c_hello_world() -> *mut c_char {
    let rust_string: String = get_hello_world();

    // Convert the String into a CString
    let c_string: CString = CString::new(rust_string).expect("Could not convert to CString");

    // Instead of returning the CString, we return a pointer for it.
    return c_string.into_raw();
}

#[no_mangle]
pub extern "C" fn c_hello_world_free(ptr: *mut c_char) {
    unsafe {
        if ptr.is_null() {
            // No data there, already freed probably.
            return;
        }

        // Here we reclaim ownership of the data the pointer points to, to free the memory properly.
        CString::from_raw(ptr);
    }
}

#[cfg(test)]
mod tests {
    use std::os::raw::c_char;
    use super::*;

    #[test]
    fn test_library_function_returns_correct_string() {
        let result = get_hello_world();

        assert_eq!(result, String::from("Hello world!"));
    }

    #[test]
    fn test_library_cabi_function_works() {
        let ptr: *mut c_char = c_hello_world();
        let cstring;

        unsafe {
            cstring = CString::from_raw(ptr);
        }

        assert_eq!(CString::new("Hello world!").unwrap(), cstring);
    }
}
