-- SQL commands to fix the users table issue

-- 1. Add the is_admin column with default value
ALTER TABLE users ADD COLUMN is_admin BOOLEAN DEFAULT FALSE AFTER email_verified_at;

-- 2. Update any existing users to have is_admin = false (if not already set)
UPDATE users SET is_admin = FALSE WHERE is_admin IS NULL;

-- 3. Make sure the column is not nullable
ALTER TABLE users MODIFY COLUMN is_admin BOOLEAN NOT NULL DEFAULT FALSE;
