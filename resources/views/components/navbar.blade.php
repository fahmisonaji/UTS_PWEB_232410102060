<nav style="background: linear-gradient(135deg, #2d5016 0%, #4a7c2c 100%); color: white; padding: 15px 0; box-shadow: 0 2px 10px rgba(0,0,0,0.2);">
    <div style="max-width: 1200px; margin: 0 auto; display: flex; justify-content: space-between; align-items: center; padding: 0 20px;">
        <div style="display: flex; align-items: center; gap: 10px;">
            <span style="font-size: 28px;">⛺</span>
            <h1 style="font-size: 24px; font-weight: bold;">GoCamp</h1>
        </div>
        
        <ul style="list-style: none; display: flex; gap: 25px; margin: 0;">
            <li>
                <a href="{{ route('dashboard', ['username' => $username]) }}" 
                   style="color: white; text-decoration: none; font-weight: 500; transition: color 0.3s;"
                   onmouseover="this.style.color='#d4edda'" 
                   onmouseout="this.style.color='white'">
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{ route('pengelolaan', ['username' => $username]) }}" 
                   style="color: white; text-decoration: none; font-weight: 500; transition: color 0.3s;"
                   onmouseover="this.style.color='#d4edda'" 
                   onmouseout="this.style.color='white'">
                    Pengelolaan
                </a>
            </li>
            <li>
                <a href="{{ route('profile', ['username' => $username]) }}" 
                   style="color: white; text-decoration: none; font-weight: 500; transition: color 0.3s;"
                   onmouseover="this.style.color='#d4edda'" 
                   onmouseout="this.style.color='white'">
                    Profile
                </a>
            </li>
            <li>
                <a href="{{ route('login') }}" 
                   style="color: white; text-decoration: none; font-weight: 500; padding: 8px 16px; background: rgba(255,255,255,0.2); border-radius: 5px; transition: background 0.3s;"
                   onmouseover="this.style.background='rgba(255,255,255,0.3)'" 
                   onmouseout="this.style.background='rgba(255,255,255,0.2)'">
                    Logout
                </a>
            </li>
        </ul>
    </div>
</nav>